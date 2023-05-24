const navItems = document.querySelector('.nav__items');
const openNavBtn = document.querySelector('#open__nav-btn');
const closeNavBtn = document.querySelector('#close__nav-btn');

// open nav menu
const openNav = () => {
  navItems.style.display = 'flex';
  openNavBtn.style.display = 'none';
  closeNavBtn.style.display = 'inline-block';
}

openNavBtn.addEventListener('click', openNav);

// close nav menu
const closeNav = () => {
  navItems.style.display = 'none';
  closeNavBtn.style.display = 'none';
  openNavBtn.style.display = 'inline-block';
}
closeNavBtn.addEventListener('click', closeNav);

const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show__sidebar-btn');
const hideSidebarBtn = document.querySelector('#hide__sidebar-btn');

// shows sidebar on small devices
const showSidebar = () => {
  sidebar.style.left = '0';
  showSidebarBtn.style.display = 'none';
  hideSidebarBtn.style.display = 'inline-block';
}

showSidebarBtn.addEventListener('click', showSidebar);

// hides sidebar on small devices
const hideSidebar = () => {
  sidebar.style.left = '-100%';
  hideSidebarBtn.style.display = 'none';
  showSidebarBtn.style.display = 'inline-block';
}

hideSidebarBtn.addEventListener('click', hideSidebar);