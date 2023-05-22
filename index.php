<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ECM Console</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
	<!-- partial:index.partial.html -->
	<header class="nav-top">
		<img width="50px" src="src\image\white.ico" alt="logo">
		<h1 class="brand-text">ECM Console</h1>
		<span class="hamburger material-icons" id="ham">menu</span>
	</header>
	
	<nav class="nav-drill">
		<ul class="nav-items nav-level-1">
			<li class="nav-item">
				<a class="nav-link" target="screen" href="report1.php">
					รายงานการใช้ไฟฟ้า
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" target="screen" href="data1.php">
					รายงานการส่งข้อมูล
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" target="screen" href="meter1.php">
					มิเตอร์
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" target="screen" href="config1.php">
					การตั้งค่า
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" target="screen" href="http://ep-surin.net/ecm">
					เกี่ยวกับ
				</a>
			</li>
		    <li class="nav-item">
				<a class="nav-link" target="screen" href="logout2.php">
					ลงชื่อออก
				</a>
			</li>
		</ul>
	</nav>

	<iframe class="content" name="screen" id="screen" src="app/index.html"></iframe>
	<!-- partial -->
	<script>
		const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'));
const backLink = `<li class="nav-item">
	<a class="nav-link nav-back-link" href="javascript:;">
		Back
	</a>
</li>`;

navExpand.forEach(item => {
  item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink);
  item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'));
  item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'));
});


// ---------------------------------------
// not-so-important stuff starts here

const ham = document.getElementById('ham');
ham.addEventListener('click', function () {
  document.body.classList.toggle('nav-is-toggled');
});



	</script>

</body>

</html>