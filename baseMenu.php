<style>
    .crud{
                min-height:91%; 
                max-height:100%; 
                border-left:2px solid white;
                border-right:2px solid white;
                color:white;
                font-size:50px;
                line-height: 44px;
                opacity:.9;
            }
            
            .create{
                background-color: #f8ae32;
            }
            .create:hover{
                opacity:1;
                background: radial-gradient(circle, #f2cd39, #f2ca28, #efc414);
            }
            
            .read{
                background-color: #08a1b3;
            }
            .read:hover{
                opacity:1;
                background: radial-gradient(circle, #72d3da, #21c2c6, #1bbbb1);
            }
            .update{
                background-color: #199e83;
            }
            .update:hover{
                opacity:1;
                background: radial-gradient(circle, #37bca1, #26c0a1, #14bc9a);
            }
            .delete{
                background-color: #ba2121;
            }
            .delete:hover{
                opacity:1;
                background: radial-gradient(circle, #d52727, #c42020, #bb1b1b);
            }
            img{
                margin-top:30%;
            }
            .menutexto{
                text-decoration:none;
                font-weight: bold;
                color:white;
            }
            .menutexto:hover{
                text-decoration:none;
                color:white;
            }
            .menu{
                background-color:black;
                height:50px;
                z-index:5;
                text-decoration: none;
            }
            li{
                list-style-type: none;
                opacity:1;
            }
            .nomesair{
                color:white;
                opacity:0.8;
            }
            .nomesair:hover{
                color:white;
                opacity:1;
            }
           @font-face {

      font-family: "vintage straps light";
      src: url("font/vintage_straps.ttf") format("truetype");

      }
      .vintage_straps-font{
    font-family: "vintage straps light";  
       } 
</style>

<div class="menu menutexto">
        <ul>
            <li>
                <a href="home.php" class="menutexto" style="font-size:30px">Controle de Presença</a>
<a class="nomesair" style="text-decoration: none; float:right; margin-right:20px;margin-top:10px;" href="?sair" onclick="return confirm('Deseja realmente sair?');"> | Sair</a>
<a class="nomesair" href='#' style="text-decoration: none;float:right; margin-top:10px"><?php 
            $sql = "SELECT * FROM tblogin where email='$_SESSION[usuario1]'";
            foreach ($conexao->query($sql) as $linha) {
                echo $linha['nome']." ";
            }
            ?></a>
            </li>
            
    </ul>
        </div>

