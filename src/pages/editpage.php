<?php
namespace App\pages;
use App\lib\pages\page;
use App\lib\core\address;

class editpage extends page
{
    public function renderView(array $params)
    {
        $employee = $params[0];
?>
                        <div>
                            <form action="<?php echo address::rootaddress . "index.php?task=update&empid=" . $employee->id; ?>" method="post">
                        <div style="text-align:center">
                            <H2>Employee Edit</H2>
                        </div>
                        <div id="emplist" style="text-align:center;border:solid 1px;">
                            <table style="width:100%" cellspacing="0" cellpadding="5" border="1">
                                <thead>
                                    <tr>
                                        <th>
                                            Employee Name
                                        </th>
                                        <td>
                                            <input type="hidden" name="empid" value="<?php echo $employee->id;?>" />
                                            <input type="text" name="name" value="<?php echo $employee->name;?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Employee Family
                                        </th>
                                        <td>
                                            <input type="text" name="family" value="<?php echo $employee->family;?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                        </th>
                                        <td>
                                            <input type="text" name="email" value="<?php echo $employee->email;?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Phone
                                        </th>
                                        <td>
                                            <input type="text" name="phone" value="<?php echo $employee->phone;?>" />
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                            <div style="margin-top:7px;">
                                <input type="submit" value="Update" /> &nbsp; 
                                <a href="<?php echo address::rootaddress; ?>">Back to list</a>
                            </div>
                        </div>
                        </form>
                        </div>

<?php
    }
}
?>
