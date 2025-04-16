<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Reports</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Reports</h2>

    <div class="mb-3">
        <label for="dateFrom">From:</label>
        <input type="date" id="dateFrom" class="form-control d-inline w-auto" placeholder="yyyy-mm-dd">
        
        <label for="dateTo">To:</label>
        <input type="date" id="dateTo" class="form-control d-inline w-auto" placeholder="yyyy-mm-dd">
        
        <button class="btn btn-primary ml-3" onclick="viewReports()">View Reports</button>
    </div>

    <div class="dataTables_wrapper">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Student Name</th>
                    <th>Reg. No.</th>
                    <th>Course Code</th>
                    <th>Semester</th>
                    <th>Date</th>
                    <th>Time-In</th>
                    <th>Time-Out</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Daniel Ofem Usang</td>
                    <td>16/CSC/050</td>
                    <td>CSC4102</td>
                    <td>2nd Semester</td>
                    <td>2022-03-04</td>
                    <td>11:45</td>
                    <td>11:57</td>
                    <td>Present</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cletus Igbe</td>
                    <td>16/CSC/060</td>
                    <td>CSC4204</td>
                    <td>2nd Semester</td>
                    <td>2022-03-05</td>
                    <td>15:16</td>
                    <td>15:19</td>
                    <td>Present</td>
                </tr>
            </tbody>
        </table>
        <div class="mt-2">
            Showing 1 to 2 of 2 entries
            <ul class="pagination float-right">
                <li class="page-item"><a class="page ⬤