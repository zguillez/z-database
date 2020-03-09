<?php

namespace Z;
class Database
{
  private $date;
  private $ip;
  private $conn;

  //----------------------------------------------------------
  public function __construct()
  {
    $this->date = date("Y-m-d H:i:s");
    $this->ip = ($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 0;
  }

  //----------------------------------------------------------
  public function test($data)
  {
    var_dump([$this->date, $this->ip, $data]);
  }

  //----------------------------------------------------------
  public function connect($servername, $username, $password, $dbname)
  {
    $this->conn = new \mysqli($servername, $username, $password, $dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }

    return $this->conn;
  }

  //----------------------------------------------------------
  public function sql($sql)
  {
    return $this->conn->query($sql);
  }

  //----------------------------------------------------------
  public function sql2lead($sql)
  {
    $this->conn->query($sql);

    return $this->conn->insert_id;
  }

  //----------------------------------------------------------
  public function sql2array($sql)
  {
    $result = $this->conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
    }

    return $data;
  }
}