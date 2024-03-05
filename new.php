<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <style>
        .pass {
            background-color: lightgreen;
        }
        
        .fail {
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <table border="1px solid">
        <thead>
            <tr>
                <th>subject</th>
                <th>Total marks</th>
                <th>obtain marks</th>
                <th>Result</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>English</td>
                <td>100</td>
                <td>
                    <form action="" method="post">
                        <?php
                        $num = '';
                        $result = '';
                        if (isset($_POST['obtainMark'])) {
                            
                            

                            $num = $_POST['obtainMark'];
                            if ($num !== '') {
                                if ($num > 40) {
                                    $result = 'Pass';
                                    $class = 'pass';
                                } else {
                                    $result = 'Fail';
                                    $class = 'fail';
                                }
                            }
                        }
                        ?>
                        <input type="number" name="obtainMark" value="<?php echo $num; ?>" />
                    </td>
                    <td class="<?php echo $class ?>"><?php echo $result ?></td>
                </tr>
                <tr>
                    <td>p.s</td>
                    <td>100</td>
                    <td>
                        <?php
                          $num1 = '';
                          $result1 = '';
                          if (isset($_POST['obtainMark1'])) {
                              $num1 = $_POST['obtainMark1'];
                              
                              if($num1 !==''){
                              if ($num1 > 40) {
                                  $result1 = 'Pass';
                                  $class1 = 'pass';
                              } else {
                                  $result1 = 'Fail';
                                  $class1 = 'fail';
                              }
                              }
                          }
                        ?>
                        <input type="number" name="obtainMark1" value="<?php echo $num1; ?>" />
                    </td>
                    <td class="<?php echo $class1 ?>"><?php echo $result1 ?></td>
                </tr>
                <tr>
                    <td>math</td>
                    <td>100</td>
                    <td>
                        <?php
                        $num2 = '';
                        $result2 = '';
                        if (isset($_POST['obtainMark2'])) {
                            $num2 = $_POST['obtainMark2'];
                            if($num2 !==''){
                            if ($num2 > 40) {
                                $result2 = 'Pass';
                                $class2 = 'pass';
                            } else {
                                $result2 = 'Fail';
                                $class2 = 'fail';
                            }
                            
                            }
                        }
                        ?>
                        <input type="number" name="obtainMark2" value="<?php echo $num2; ?>" />
                    </td>
                    <td class="<?php echo $class2 ?>"><?php echo $result2 ?></td>
                </tr>
                <tr>
                    <td>urdu</td>
                    <td>100</td>
                    <td>
                        <?php
                        $num3 = '';
                        $result3 = '';
                        if (isset($_POST['obtainMark3'])) {
                            $num3 = $_POST['obtainMark3'];
                            
                            if($num3 !==''){
                            if ($num3 > 40) {
                                $result3 = 'Pass';
                                $class3 = 'pass';
                                
                            } else {
                                $result3 = 'Fail';
                                $class3 = 'fail';
                                
                            }
                            }
                        }
                        ?>
                        <input type="number" name="obtainMark3" value="<?php echo $num3; ?>" />
                    </td>
                    <td class="<?php echo $class3 ?>"><?php echo $result3 ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                  
                    <td style="column-span: 2;">Total of Obtained marks</td>
                    <td style="column-span: 2;">
                        <?php
                      $total_marks = intval($num) + intval($num1) + intval($num2) + intval($num3);
                      echo $total_marks;
                        ?>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <form action="" method="post">
            <input type="submit" value="Submit All">
        </form>
    </body>
    </html>

