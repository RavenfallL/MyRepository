<?php  
    if(isset($_POST["submit"]) && $_POST["submit"] == "��½")  
    {  
        $name = $_POST["username1"];  
        $passwd = $_POST["password1"];  
        if($name == "" || $passwd == "")  
        {  
            echo "<script>alert('�������û��������룡'); history.go(-1);</script>";  
}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("database");
    //mysql_query("set names 'gbk'");  
    $sql = "select name,passwd from user where name = '$_POST[username1]' and passwd = '$_POST[password1]'";
    $result = mysql_query($sql);
    $num = mysql_num_rows($result);
    if($num)
    {
        $row = mysql_fetch_array($result);
        echo $row[0];
    }
    else
    {
        echo "<script>alert('�û��������벻��ȷ��');history.go(-1);</script>";
}
}
}
else
{
echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
}

?>  