<?php include('other/menu.php'); ?>
<div class="container">
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>
        <a href="add-category.php"class="btn btn-primary btn-sm">Add Category</a>

        <br>
        <br>

        <?php 
        
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['remove']))
        {
            echo $_SESSION['remove'];
            unset($_SESSION['remove']);
        }

        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if(isset($_SESSION['no-category-found']))
        {
            echo $_SESSION['no-category-found'];
            unset($_SESSION['no-category-found']);
        }

        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }

        if(isset($_SESSION['failed-remove']))
        {
            echo $_SESSION['failed-remove'];
            unset($_SESSION['failed-remove']);
        }
    
    ?>
        <table class="table table-light">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Featured</th>
      <th scope="col">Active</th>
      <th scope="col">Actions</th>

      <?php 

$sql = "SELECT * FROM table_category";


$res = mysqli_query($conn, $sql);


$count = mysqli_num_rows($res);


$sn=1;

if($count>0)
{

    while($row=mysqli_fetch_assoc($res))
    {
        $id = $row['id'];
        $title = $row['title'];
        $image_name = $row['image_name'];
        $featured = $row['featured'];
        $active = $row['active'];

        ?>

            <tr>
                <td><?php echo $sn++; ?>. </td>
                <td><?php echo $title; ?></td>

                <td>

                    <?php  
                        if($image_name!="")
                        {
                            ?>
                            
                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px" >
                            
                            <?php
                        }
                        else
                        {
                            echo "<div class='error'>Image not Added.</div>";
                        }
                    ?>

                </td>

                <td><?php echo $featured; ?></td>
                <td><?php echo $active; ?></td>
                <td>
                    <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn btn-success btn-sm">Update Category</a>
                    <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn btn-danger btn-sm">Delete Category</a>
                </td>
            </tr>

        <?php

    }
}
else
{
    ?>

    <tr>
        <td colspan="6"><div class="error">No Category Added.</div></td>
    </tr>

    <?php
}

?>

    
  </thead>


<?php include('other/footer.php'); ?>