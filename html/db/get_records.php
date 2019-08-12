<?php
$action = $_GET['action'];

switch ($action) {
	case 'employee':
		get_employee();
		break;

	case 'reservations':
		get_reservations();
		break;

	case 'ereservations':
		get_ereservations();
		break;	

	case 'customers':
		get_customers();
		break;				

	default:
		# code...
		break;
}

function get_employee()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = $pdo->prepare("SELECT * from employee WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $row = $sql->fetch();
	
	$html = '<form action="db/edit_employee.php" method="POST">
				<div class="modal-body">
			       	<div class="row">
			       		<input type="hidden" name="id" value="'. $row['id'] .'"/>
					    <div class="col-md-4 mb-4">
					        <div class="md-form">
					            <input type="text" id="form1" name="emp_name" required class="form-control" value="'. $row['emp_name'] .'">
					            <label for="form1" class="active">Name</label>
					        </div>
					    </div>
					    <div class="col-md-4 mb-4">

					        <div class="md-form form-sm">
					            <input type="text" id="form2" name="emp_email" required class="form-control form-control-sm" value="'. $row['emp_email'] .'">
					            <label for="form2" class="active">Email</label>
					        </div>
					    </div>
					    <div class="col-md-4 mb-4">

					        <div class="md-form">
					            <input name="password" type="text" id="form3" required class="form-control" value="'. $row['password'] .'">
					            <label for="form3" class="active">Password</label>
					        </div>
					    </div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" type="button" class="btn btn-primary" value="Save Changes"/>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>
			'
			;
	echo $html;
}


function get_reservations()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = $pdo->prepare("SELECT * from reservations WHERE res_id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $row = $sql->fetch();
	
	$html = '<form action="db/edit_reservations.php" method="POST">
				<div class="modal-body">
			       	<div class="row">
			       		<input type="hidden" name="res_id" value="'. $row['res_id'] .'"/>
					    <div class="col-md-4 mb-4">
					        <div class="md-form">
					            <input type="text" id="form1" name="emp_id" required class="form-control" value="'. $row['emp_id'] .'">
					            <label for="form1" class="active">EmpID</label>
					        </div>
					    </div>
					    <div class="col-md-4 mb-4">

					        <div class="md-form form-sm">
					            <input type="text" id="form2" name="room_id" required class="form-control form-control-sm" value="'. $row['room_id'] .'">
					            <label for="form2" class="active">RoomID</label>
					        </div>
					    </div>
					    <div class="col-md-4 mb-4">

					        <div class="md-form">
					            <input name="date" type="text" id="form3" required class="form-control" value="'. $row['date'] .'">
					            <label for="form3" class="active">Date</label>
					        </div>
					    </div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" type="button" class="btn btn-primary" value="Save Changes"/>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</form>
			'
			;
	echo $html;
}

function get_ereservations()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = $pdo->prepare("SELECT * from reservations WHERE res_id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $row = $sql->fetch();
	
	$html = '<form action="db/employee_reservation.php" method="POST">
				<div class="modal-body">
			       	<div class="row">
			       		<input type="hidden" name="res_id" value="'. $row['res_id'] .'"/>
					    <div class="col-md-4 mb-4">
					        <div class="md-form">
					            <input type="text" id="form1" name="emp_id" required class="form-control" value="'. $row['emp_id'] .'">
					            <label for="form1" class="active">EmpID</label>
					        </div>
					    </div>
					    <div class="col-md-4 mb-4">

					        <div class="md-form form-sm">
					            <input type="text" id="form2" name="room_id" required class="form-control form-control-sm" value="'. $row['room_id'] .'">
					            <label for="form2" class="active">RoomID</label>
					        </div>
					    </div>
					    <div class="col-md-4 mb-4">

					        <div class="md-form">
					            <input name="date" type="text" id="form3" required class="form-control" value="'. $row['date'] .'">
					            <label for="form3" class="active">Date</label>
					        </div>
					    </div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" type="button" class="btn btn-primary" value="Save Changes"/>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</form>
			'
			;
	echo $html;
}


function get_customers()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = $pdo->prepare("SELECT * from customers WHERE c_id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $row = $sql->fetch();
	
	$html = '<form action="db/edit_customer.php" method="POST">
				<div class="modal-body">
			       	<div class="row">
			       		<input type="hidden" name="c_id" value="'. $row['c_id'] .'"/>
					    <div class="col-md-4 mb-4">
					        <div class="md-form">
					            <input type="text" id="form1" name="c_name" required class="form-control" value="'. $row['c_name'] .'">
					            <label for="form1" class="active">Customer Name</label>
					        </div>
					    </div>
					    <div class="col-md-4 mb-4">

					        <div class="md-form form-sm">
					            <input type="text" id="form2" name="c_email" required class="form-control form-control-sm" value="'. $row['c_email'] .'">
					            <label for="form2" class="active">Customer Email</label>
					        </div>
					    </div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" type="button" class="btn btn-primary" value="Save Changes"/>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</form>
			'
			;
	echo $html;
}

?>

