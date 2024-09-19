<?php
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
?>
<!DOCTYPE html>
<html lang="en">
<?php include ROOT_PATH . "/psms/admin/includes/header.php"; ?>
<?php include ROOT_PATH . "/psms/admin/helper/dateHelper.php"; ?>
<style>
    table {
        max-width: 60%;
        text-align: center;
    }
</style>

<body>
    <div class="containerMod">
        <?php include ROOT_PATH . "/psms/admin/includes/navbarLinks.php"; ?>
        <?php include ROOT_PATH . "/psms/admin/includes/toasts/toastSuccess.php"; ?>
        <section class="mainMod">
            <button id="toggle-button">
                <i class="fas fa-bars"></i>
            </button>
            <center>
            <div class="">
                <h3>Rating Table for Performance Indicators</h3>
            </div>

            <div class="">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Numerical Rating</th>
                            <th>Rating Criteria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5</td>
                            <td>Exceed standards</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Always meets standards</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Occasionally meets standards</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Seldom meets standards</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Never meets standards</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br/>
            <div class="">
                <h3>Rating Table for Personal Traits</h3>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Numerical Rating</th>
                        <th>Number of Traits</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Nine (9) to Ten (10)</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Seven (7) to Eight (8)</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Five (5) to Six (6)</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Three (3) to Four (4)</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>One (1) to Two (2)</td>
                    </tr>
                </tbody>
            </table>
            <br/>
            <div class="">
                <h3>NPR-APR Table</h3>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Numerical Performance Rating (NPR)</th>
                        <th>Adjectival Performance Rating (APR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>91-100</td>
                        <td>Outstanding(OS)</td>
                    </tr>
                    <tr>
                        <td>81-90.99</td>
                        <td>Very Satisfactory (VS)</td>
                    </tr>
                    <tr>
                        <td>71-80.99</td>
                        <td>Satisfactory (SF)</td>
                    </tr>
                    <tr>
                        <td>70.99-BELOW</td>
                        <td>Poor (PR)</td>
                    </tr>
                </tbody>
            </table>
        </center>
        </section>
    </div>



    <script>
        document.getElementById('toggle-button').addEventListener('click', function() {
            document.querySelector('.sidebarMod').classList.toggle('collapsed');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>