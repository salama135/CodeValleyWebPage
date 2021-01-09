<?php

function getTracks()
{

  $conn = new mysqli("localhost", "root", "", "codeValley");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $result = $conn->query("select trackID,name,description,DATE_FORMAT(date, '%e %b') date from `track` ");
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<li class="list-inline-item event-list">
                    <div class="px-4">
                      <div class="event-date bg-soft-primary text-primary">' . $row["date"] . '</div>
                      <h5 class="font-size-16">' . $row["name"] . '</h5>
                      <p class="text-muted">' . $row["description"] . '</p>
                      <div>
                        <a onclick="addDiv(' . $row["trackID"] . ')" class="btn btn-primary btn-sm">Show Games</a>
                      </div>
                    </div>
                  </li>';
    }
  }
  $conn->close();
}
function getTrackData($ID)
{
  $conn = new mysqli("localhost", "root", "", "codeValley");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $result = $conn->query("select * from data where trackID = $ID");
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<div class="col">
      <div class="card shadow-sm">
        <img src="' . $row["img"] . '" class="img-fluid" alt="Responsive image">
        <div class="card-body">
          <p class="card-text">' . $row["description"] . '</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="' . $row["gameSrc"] . '" class="btn btn-primary">Play</a>
            </div>
          </div>
        </div>
      </div>
    </div>';
    }
  }
  $conn->close();
}
