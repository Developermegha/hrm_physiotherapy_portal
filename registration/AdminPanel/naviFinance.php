<form id="myForm" action="financePage.php" method="post">
                <?php
                    
                        echo '<input type="hidden" name="id" value="'.$_REQUEST['id'].'">';
                   
                ?>
          </form>
            <script type="text/javascript">
                document.getElementById('myForm').submit();
            </script>