const btn_menu = document.querySelector(".btn-menu");
const side_bar = document.querySelector(".sidebar");
let isSidebarExpanded = false;
let isManuallyExpanded = false;
let isLinkClicked = false;
let isDropdownOpen = false;

const isHomePage = window.location.href.includes("index.php");
const dropdownContents = document.querySelectorAll(".dropdown-content");
const downArrows = document.querySelectorAll(".dropdown-btn .bx-chevron-down");
const upArrows = document.querySelectorAll(".dropdown-btn .bx-chevron-up");

if (!isHomePage) {
	expandSidebar();
}

btn_menu.addEventListener("click", function () {
	toggleSidebar();
});

function expandSidebar() {
	side_bar.classList.add("expand");
	isSidebarExpanded = true;
	changeMenuIcon();
}

function toggleSidebar() {
	side_bar.classList.toggle("expand");
	isSidebarExpanded = !isSidebarExpanded;
	isManuallyExpanded = true;
	changeMenuIcon();

	if (!isSidebarExpanded) {
		closeAllDropdowns();
	}
}

function changeMenuIcon() {
	if (side_bar.classList.contains("expand")) {
		btn_menu.classList.replace("bx-menu", "bx-menu-alt-right");
	} else {
		btn_menu.classList.replace("bx-menu-alt-right", "bx-menu");
	}
}

document.querySelector(".theme-btn").addEventListener("click", () => {
	const themeText = document.querySelector(".theme-wrapper p");
	themeText.innerText =
		themeText.innerText === "Dark Mode" ? "Light Mode" : "Dark Mode";
});

document.querySelectorAll(".dropdown-btn").forEach((btn) => {
	btn.addEventListener("click", function (e) {
		e.preventDefault();
		const dropdownContent = this.nextElementSibling;
		const listId = this.dataset.list;

		if (isSidebarExpanded) {
			toggleDropdown(dropdownContent, listId);
		} else {
			expandSidebar();
		}
	});
});

function closeAllDropdowns() {
	dropdownContents.forEach((dropdown) => {
		dropdown.style.display = "none";
	});

	downArrows.forEach((arrow) => {
		arrow.style.display = "block";
	});

	upArrows.forEach((arrow) => {
		arrow.style.display = "none";
	});

	isDropdownOpen = false;
	localStorage.setItem("dropdownOpen", "false");
}

function toggleDropdown(dropdownContent, listId) {
	if (dropdownContent.style.display === "block") {
		closeAllDropdowns();
	} else {
		closeAllDropdowns();
		dropdownContent.style.display = "block";
		downArrows[listId].style.display = "none";
		upArrows[listId].style.display = "block";
		isDropdownOpen = true;
		localStorage.setItem("dropdownOpen", "true");
	}
}

document.querySelectorAll(".dropdown-content a").forEach((link) => {
	link.addEventListener("click", function () {
		isLinkClicked = true;
		localStorage.setItem(
			"sidebarExpanded",
			isSidebarExpanded ? "true" : "false"
		);
	});
});

if (isHomePage) {
	window.addEventListener("beforeunload", function () {
		closeAllDropdowns();
		side_bar.classList.remove("expand");
		isSidebarExpanded = false;
		localStorage.setItem("sidebarExpanded", "false");
		changeMenuIcon();
	});
}

const previousSidebarState = localStorage.getItem("sidebarExpanded");
if (previousSidebarState === "true" && !isHomePage) {
	expandSidebar();
}

const previousDropdownState = localStorage.getItem("dropdownOpen");
if (previousDropdownState === "true" && !isHomePage) {
	isDropdownOpen = true;
	document.querySelectorAll(".dropdown-btn").forEach((btn) => {
		if (btn.dataset.list === previousDropdownState) {
			const dropdownContent = btn.nextElementSibling;
			const listId = btn.dataset.list;

			toggleDropdown(dropdownContent, listId);
		}
	});
}

const btn_theme = document.querySelector(".theme-btn");
const theme_ball = document.querySelector(".theme-ball");

const localData = localStorage.getItem("theme");

if (!localData) {
	localStorage.setItem("theme", "light");
}

if (localData === "dark") {
	document.body.classList.add("dark-mode");
	theme_ball.classList.add("dark");
} else if (localData === "light") {
	document.body.classList.remove("dark-mode");
	theme_ball.classList.remove("dark");
}

btn_theme.addEventListener("click", function () {
	document.body.classList.toggle("dark-mode");
	theme_ball.classList.toggle("dark");
	localStorage.setItem(
		"theme",
		document.body.classList.contains("dark-mode") ? "dark" : "light"
	);
});
