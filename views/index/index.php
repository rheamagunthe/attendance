<div >
	<div class="dashboard" style="display: flex; justify-content: space-around; padding: 20px;">
			<div class="card blue" style="background-color: #007BFF; color: white; padding: 20px; border-radius: 5px; width: 30%; text-align: center;">
				<p>No. of Registered Students</p>
				<a href="registered.php" style="color: white; text-decoration: underline;">More info &gt;</a>
			</div>
			<div class="card green" style="background-color: #28A745; color: white; padding: 20px; border-radius: 5px; width: 30%; text-align: center;">
				<p>No. of Enrolled Students</p>
				<a href="#" style="color: white; text-decoration: underline;">More info &gt;</a>
			</div>
			<div class="card orange" style="background-color: #FFC107; color: black; padding: 20px; border-radius: 5px; width: 30%; text-align: center;">
				<p>No. of Attendance</p>
				<a href="#" style="color: black; text-decoration: underline;">More info &gt;</a>
	</div>
</div>
<div class="row">	
	<div class="col-md-8">
		<div class="box box-solid">
			<div class="box-header with-border">
				<h4 class="box-title">Calendar of Events</h4>
			</div>
			<div class="box-body no-padding">
				<div id="calendar"></div>
			</div>
			<div class="overlay">
				<i class="fa fa-refresh fa-spin"></i>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box box-solid">
			<div class="box-header with-border">
				<h4 class="box-title">Today's Event(s)</h4>
			</div>
			<div class="box-body">
				<?php if(isset($this->currentEvents) && $this->currentEvents != null): ?>
				<?php
				foreach($this->currentEvents as $event):
					if($event['status'] == "wholeday"):
				?>
				<div class="info-box bg-aqua no-margin">
		            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
		            <div class="info-box-content">
						<span class="info-box-text"><?php echo $event['event_name']; ?> - <?php echo $event['status']; ?></span>
						<span class="info-box-number">Current Attendees: <?php echo (date('H') < 12) ? $event['currentAttendanceMorning'] : $event['currentAttendanceAfternoon']; ?></span>
						<div class="progress">
							<div class="progress-bar" style="width: 100%"></div>
						</div>
						<span class="progress-description">Current Session: <?php echo (date('H') < 12) ? "Morning" : "Afternoon"; ?></span>
		            </div>
		            <!-- /.info-box-content -->
		        </div>
		    	<?php
		    		else:
				?>
				<div class="info-box bg-aqua no-margin">
		            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
		            <div class="info-box-content">
						<span class="info-box-text"><?php echo $event['event_name']; ?> - Half Day</span>
						<span class="info-box-number">Current Attendees: <?php echo (date('H') < 12) ? $event['currentAttendanceMorning'] : $event['currentAttendanceAfternoon']; ?></span>
						<div class="progress">
							<div class="progress-bar" style="width: 100%">Current Session: <?php echo ucfirst($event['status']); ?></div>
						</div>
		            </div>
		            <!-- /.info-box-content -->
		        </div>
				<?php
					endif;
		    	endforeach;
		    	?>
		        <?php else: ?>
				<p class="alert alert-info no-margin">Currently we don't have any events on-going</p>
				<?php endif; ?>
		    </div>
		</div>
		<div class="box box-solid">
			<div class="box-header with-border">
				<h4 class="box-title">Upcoming Event(s)</h4>
			</div>
			<div class="box-body">
				<?php if(isset($this->upcomingEvents) && $this->upcomingEvents != null): ?>
				<?php foreach($this->upcomingEvents as $event): ?>
				<div class="info-box bg-yellow no-margin">
		            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
		            <div class="info-box-content">
						<span class="info-box-text"><?php echo $event['event_name']; ?></span>
						<span class="info-box-number"><?php echo date("F d, Y",strtotime($event['event_start_date'])); ?></span>
						<div class="progress">
							<div class="progress-bar" style="width: 100%"></div>
						</div>
						<span class="progress-description"><?php echo ucfirst($event['status']); ?></span>
		            </div>
		            <!-- /.info-box-content -->
		        </div>
		    	<?php endforeach; ?>
		        <?php else: ?>
				<p class="alert alert-info no-margin">Currently we don't have any upcoming events</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="main-content">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <!-- <div class="dashboard" style="display: flex; justify-content: space-around; padding: 20px;">
        <div class="card blue" style="background-color: #007BFF; color: white; padding: 20px; border-radius: 5px; width: 30%; text-align: center;">
            <p>No. of Registered Students</p>
            <a href="registered.php" style="color: white; text-decoration: underline;">More info &gt;</a>
        </div>
        <div class="card green" style="background-color: #28A745; color: white; padding: 20px; border-radius: 5px; width: 30%; text-align: center;">
            <p>No. of Enrolled Students</p>
            <a href="#" style="color: white; text-decoration: underline;">More info &gt;</a>
        </div>
        <div class="card orange" style="background-color: #FFC107; color: black; padding: 20px; border-radius: 5px; width: 30%; text-align: center;">
            <p>No. of Attendance</p>
            <a href="#" style="color: black; text-decoration: underline;">More info &gt;</a>
        </div>
    </div> -->
    <script src="scripts.js"></script>
</body>
</html>