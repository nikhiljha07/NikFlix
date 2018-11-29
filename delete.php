


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		.delete{
          display:inline;
          text-align: center;

        }

        .delete button{
          display:block;
          position: relative;
          left:45%;
          bottom: 20px;
          margin:10px;
        }

	</style>
	</head>

	<body>
		 <div class="delete">
              <form action='delete_id.php' method='post'>
                <input name="tv_id" type="text" placeholder="Enter TV_Id To Delete">
                <button name='btnn' class="btn btn-danger">Delete</button>
              </form>
            </div>

	</body>