// hacky! figure out the robust/sustainable way to do this

const index = document.getElementById("home");
const teachersIndex = document.getElementById("teachers");
const blocksIndex = document.getElementById("blocks");
const deptIndex = document.getElementById("departments");
const adminIndex = document.getElementById("admin");
const classroomsIndex = document.getElementById("classrooms");

const url = new URL(document.URL);
const pathname = url.pathname;

switch (pathname) {
  case "/school/":
    index.classList.add("active");
    break;
  case "/school/teachers.php":
    teachersIndex.classList.add("active");
    break;
  case "/school/blocks.php":
    blocksIndex.classList.add("active");
    break;
  case "/school/departments.php":
    deptIndex.classList.add("active");
    break;
  case "/school/admin/":
    adminIndex.classList.add("active");
    break;
  case "/school/classrooms.php":
    classroomsIndex.classList.add("active");
    break;
}
