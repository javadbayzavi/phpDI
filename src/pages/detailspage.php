<?php
namespace App\pages;
use App\lib\pages\page;

class detailspage extends page
{
    public function renderView(array $params)
    {
        $employee = $params[0];
?>
                        <div style="text-align:center">
                            <H2>Details info of employee</H2>
                        </div>
                        <div id="emplist" style="text-align:center;border:solid 1px;">
                            <table style="width:100%" cellspacing="0" cellpadding="5" border="1">
                                <thead>
                                    <tr>
                                        <th>
                                            Employee ID
                                        </th>
                                        <td>
                                        <?php
                                                echo $employee->id;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Full name
                                        </th>
                                        <td>
                                        <?php
                                                echo $employee->getFullName();
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                        </th>
                                        <td>
                                        <?php
                                                echo $employee->email;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Phone
                                        </th>
                                        <td>
                                        <?php
                                                echo $employee->phone;
                                            ?>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

<?php
    }
}
?>
