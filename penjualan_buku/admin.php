<?php
    class Admin extends Database
    {

        public function index()
        {
            $datadmin = mysqli_query($this->koneksi, "select * from admin");

            return $datadmin;
        }
        public function create($user_admin,$pass_admin)
        {
            mysqli_query($this->koneksi,
                        "insert into admin values (null,'$user_admin','$pass_admin')"
                    );

        }
      
        public function show($id)
        {
            $datadmin = mysqli_query($this->koneksi, 
                        "select * from admin where id='$id'"
                    );

            return $datadmin;
        }
        public function edit($id)
        {
            $datadmin = mysqli_query($this->koneksi, 
                        "select * from admin  where id='$id'"
                    );

            return $datadmin;
        }
        public function update($id, $nipd, $nama)
        {
            mysqli_query(
                $this->koneksi,
                "update admin set user_admin='$user_admin', pass_admin='$pass_admin' where id='$id'"
            );
        }
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from admin where id='$id'"
                    );

        }
        
    }
    
?>