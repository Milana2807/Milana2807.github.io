<?php   
require_once "db.php";


// var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

<style>
    .container-modal {
        width: 1180px;
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 100px;
    }

    .container-modal a button {
        border: none;
        background-color: #FFEEFF; 
        color: #000; 
    }

    a {
        text-decoration: none;
    }

    .but-zak {
        display: flex;
        width: 170px;
        margin-left: 0px;
        margin-top: 140px;
    }

    @media (max-width: 570px) {
        th {
            display: none;
        }

        td {
            display: flex;
            font-size: 45px;
        }

        td img {
            width: 611px;
        }

        td p {
            text-align: justify;
            max-width: 1180px;
        }

        .btn {
            width: 250px;
            height: 70px;
            font-size: 45px;
        }

        .btn-del {
            margin-left: -60px;
            width: 120px;
            height: 120px;
        }

        .modal-footer button {
            font-size: 35px;
        }

        .container-modal a button {
            background-color: #6a6c85;
            border: 3px solid #6a6c85;
            color: #fff; 
            border-radius: 5px;
            width: 550px;
            font-size: 36px;
            margin-left: 30px;
            text-align: center;
        }

        .container-modal {
            width: 1180px;
            margin: 0 auto;
            margin-top: 150px;
        }

        .container-modal h2 {
            font-size: 70px;
            margin-top: 50px;
            margin-left: 10px;
        }
    }

    /*shapka*/
    .header {
display: flex;
flex-flow: row nowrap;
justify-content: flex-start;
align-items: center;
height: 200px;
background-color: white;
}

.menu {
flex-grow: 1;
background-color: white;
}

.menu1 {
flex-grow: 1;
background-color: #FFEEFF;
}

.menu ul {
display: flex;
flex-flow: row nowrap;
margin: 2px 0 0;
padding: 0;
font-size: 20px;
line-height: 18px;
list-style: none;
background-color: white;
}

.menu1 ul {
display: flex;
flex-flow: row nowrap;
margin: 2px 0 0;
padding: 0;
font-size: 23px;
line-height: 18px;
list-style: none;
background-color: #FFEEFF;
justify-content: center;
}

.menu li {
margin-right: 30px;
}

.menu1 li {
margin-right: 30px;
}

.menu li: last-child {
margin-right: 0;
}

.menu1 li: last-child {
margin-right: 0;
}

.menu a {
padding: 8px 10px;
color: #000;
text-decoration: none;
}

.menu1 a {
padding: 8px 10px;
color: #000;
text-decoration: none;
}

.logo {
margin-right: 30px;
background-color: white;
}

.logo a {
background-color: white;
}

.menu a,
.menu .active {
display: block;
padding: 8px 10px;
letter-spacing: .27em;
background-color: white;
}

.menu1 a,
.menu1 .active {
display: block;
padding: 8px 10px;
background-color: #FFEEFF;
}

.menu .active {
color: #fff;
border-radius: 8px;
}

.menu1 .active {
color: #fff;
border-radius: 8px;
}

.tel {
margin-right: 10px;
background-color: white;
}

.tel a {
margin-right: 10px;
background-color: white;
}

.korzina {
margin-right: 25px;
background-color: white;
}

.korzina a {
margin-right: 25px;
background-color: white;
}

.naverh {
display: block;
position: fixed;
bottom: 20px;
right: 15px;
}

/*footer*/
.poloska {
background-color: #d6a3d1;
height: 3px;
margin-top: 50px;
}

.footer {
position: flex;
left: 0; bottom: 0;
background-color: #FFEEFF; 
color: black;
width: 100%;
height: 140px;
}

.infofooter {
color: black;
background-color: #FFEEFF; 
font-family: Century Gothic;
font-size: 20px;
text-transform: uppercase;
margin-left: 10px;
}

.social {
background-color: #FFEEFF;
}

.social a {
background-color: #FFEEFF;
}
</style>
</head>
<body>

<div class="header"> <!--??????????-->
		<div class="logo"> <!--??????????????-->
			<a href="../index.php">
				<img src="../images/logo.jpg" width="300" height="196"> 
			</a>
		</div>
		<div class="menu"> <!--????????-->
			<ul>
			<li><a href="../tovar.php">????????????</a></li>
				<li><a href="../news.php">??????????????</a></li>
				<li><a href="../okomp.php">?? ????????????????</a></li>
				<?php if($_COOKIE['user'] == ''): ?>
				<li><a href="../lich.php">???????????? ??????????????</a></li>
				<?php else: ?>
				<li><a href="cart.php">???????????? ??????????????</a></li>
                <?php endif; ?>
				<li><a href="../svyaz.php">?????????????????? ?? ????????</a></li>
				<?php if($_COOKIE['user'] == ''): ?>
				<li><a href="../regis.php">??????????????????????/????????</a></li>
                    <?php else: ?>
                   
						<li><a href="" style="font-weight: bold;"><?=$_COOKIE['user'] ?></a></li>
					<li><a href="../php/logout.php" style="display: inline-block;">??????????</a></li>
                  
                <?php endif; ?>
			</ul>
		</div>

		<a href="#" class="naverh"><img src="../images/knopka.png" width="70px" height="70px"></a> <!--???????????? "????????????"-->

		<div class="tel"> <!--???????????? ?????? ???????????? ????????????-->
			<a href="tel:+7(951)4870193">
				<img src="../images/zvonok.png" width="60" height="60" alt="?????????????????????? ????????????????????">
		</a>
	</div>

		<div class="korzina"> <!--??????????????-->
		<a href="learning_center/cart.php">
				<img src="../images/korzina.png" width="60" height="60" alt="?????????????????????? ????????????????????">
			</a>
		</div>
	</div>

<div class="container-modal">

    <h2>??????????????</h2>

    <table class="table" style="margin-top: 50px;">
            <thead>
            <tr>
                <th scope="col">??????????????????????</th>
                <th scope="col">????????????????</th>
                <th scope="col" style="width: 100px;">????????</th>
                <th scope="col">????????????????</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                $polz=$_COOKIE['user'];
                $products=mysqli_query($connection, "SELECT * FROM `korzina` WHERE `login`='$polz'");
                $products=mysqli_fetch_all($products);
                foreach ($products as $course) {
            ?>
                <tr class="basket__item">
                    <td>
                        <img src="../images/<?=$course[3]?>" width="150" alt="<?=$course[2]?>">
                    </td>

                    <td><?=$course[2]?></td>

                    <td>
                        <b><?=$course[4]?> ???</b>

                        <a href="../form_zakaz.php?id=<?=$course[0]?>" class="but-zak"><button type="button" class="btn btn-primary">???????????????? ??????????</button></a>
                    </td>

                    <td style="width: 100px">
                        <a href="del.php?id=<?=$course[0]?>" class="btn-del" id="btn-del"><img src="../delete.png" width="35" height="35" class="btn-del" style="margin-left: 51px;"></a>
                    </td>
                </tr>
                  
            <tr><td></td><td></td><td></td></tr>
            <?php } ?>
            </tbody>
        </table>

    <a href="../tovar.php" class="but"><button type="button" class="btn" data-dismiss="modal">???????????????????? ??????????????</button></a>
</div>
</body>
</html>