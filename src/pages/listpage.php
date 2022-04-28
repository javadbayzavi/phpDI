<?php
namespace App\pages;
use App\lib\pages\page;
use App\lib\core\address;

class listpage extends page
{
    public function renderView(array $params)
    {
        $emplist = $params[0];
?>
                        <div style="text-align:center">
                            <H2>A breif list of employees</H2>
                        </div>
                        <div id="emplist" style="text-align:center;border:solid 1px;">
                            <table style="width:100%" cellspacing="0" cellpadding="5" border="1">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Employee ID
                                        </th>
                                        <th>
                                            Full name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php   
                                    $index = 0;
                                foreach ($emplist as $item) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                                echo ++$index;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $item->id;
                                            ?>
                                        </td>
                                        <td>
                                        <?php
                                                echo $item->getFullName();
                                            ?>
                                        </td>
                                        <td>
                                        <?php
                                                echo $item->email;
                                            ?>
                                        </td>
                                        <td>
                                        <?php
                                                echo $item->phone;
                                            ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo address::rootaddress . "index.php?task=edit&empid=" . $item->id; ?>">Edit</a> &nbsp; - &nbsp;
                                            <a href="<?php echo address::rootaddress . "index.php?task=details&empid=" . $item->id; ?>">Details</a> &nbsp; - &nbsp;
                                            <a href="<?php echo address::rootaddress . "index.php?task=delete&empid=" . $item->id; ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                } 
                                    ?>
                                </tbody>
                            </table>
                        </div>

<?php
    }
}
?>
