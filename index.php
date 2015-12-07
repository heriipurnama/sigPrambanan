<html>
<head>
    <link rel="icon" href="images/icon.png" class="img-circle">
    <title>SIG Prambanan</title>
    <style type="text/css">
        table{
           border-radius:10px;
        }
        table, tr, td{
            	border-color: #94ffdd;
        }
        body{
          background:#E6E6FA;
        }
        table, tr, td,h3{
            vertical-align: top;
        }
    </style>
    </head>
    <body>
        <table border='1px' width='1500px' height='740px'>
                <tr>
                    <td colspan="2" height='15px'>
                        <img src='images/header.png'>
                    </td>
                </tr>
               <tr>
                 <td width="30px">
                     <h3>LAYER</h3>
                     <a href="?pilih=1">Batas</a><br>
                     <a href="?pilih=2">Posisi</a><br>
                     
                </td>
                   <td>
                       <?php
                            $pil=$_GET['pilih'];
                            switch($pil){
                            case 1:
                                include("batas.php"); 
                                break;
                            case 2:
                                include("posisi.php");
                                break;
                            }
                          ?>
                  </td>
             </tr>
            <tr>
                <td colspan="2" height="59px">
                     <img src='images/footer.png'>
                </td>
            </tr>
        </table>
    </body>
</html>