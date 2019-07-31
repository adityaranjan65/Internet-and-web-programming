<?php
                $op=$_POST['op'];
				$my_file = $_POST['fn'];
                switch($op)
                {
                                case 1 : if(fopen($my_file, 'w'))
								{echo "success";
								}
								
								
                                                break;
								case 2 : echo file_get_contents( $my_file );
                                                break;
												
								case 3 : $handle=fopen($my_file, 'a+') or die('Cannot open file:  '.$my_file);
										 $data = 'New data line 1';
										 fwrite($handle, $data);
										 $new_data = "\n".'New data line 2';
										 fwrite($handle, $new_data);
                                                break;
												
								case 4 : 
										$newfile = $_POST['fn1'];

										if (!copy($my_file, $newfile)) {
											echo "failed to copy $my_file...\n";
											}
                                                break;
                                                                               
                                case 5 :  $f_name=$_FILES['file']['name'];
                                                $fh = fopen('$f_name','a');
                                                fclose($fh);
                                                unlink($f_name);
                                                echo "Deleted file is : ".$_FILES['file']['name']."</br>";
                                                break;
                }
?>