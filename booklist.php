<?php
$db = new mysqli("172.16.238.12", "root", "","programming_php");
// make sure the above credentials are correct for your environment
if ($db->connect_error) {
    die("Connect Error ({$db->connect_errno}) {$db->connect_error}");
}
$sql = "SELECT * FROM books WHERE available = 1 ORDER BY title";
$result = $db->query($sql);
?>
<html>
<body>
<table cellspacing="2" cellpadding="6" align="center" border="1">
    <tr>
        <td colspan="4">
            <h3 align="center">These Books are currently available</h3>
        </td>
    </tr>
    <tr>
        <td align="center">Title</td>
        <td align="center">Year Published</td>
        <td align="center">ISBN</td>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo stripcslashes($row['title']); ?></td>
            <td align="center"><?php echo $row['pub_year']; ?> </td>
            <td><?php echo $row['ISBN']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
