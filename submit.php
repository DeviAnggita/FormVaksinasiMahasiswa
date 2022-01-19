<?php

$pagename = "Data Mahasiswa - Sistem Akademik Mahasiswa"; 
require 'templates/header.php';
?>

<div class="p-md-5 dark-mode">
    <h1 class="text-center mb-5">Data Vaksinasi Mahasiswa</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th class="align-middle">No. Registrasi</th>
                    <th class="align-middle">NIM</th>
                    <th class="align-middle">Nama</th>
                    <th class="align-middle">Jenis Kelamin</th>
                    <th class="align-middle">Kota Kelahiran</th>
                    <th class="align-middle">Tanggal Lahir</th>
                    <th class="align-middle">Program Studi</th>
                    <th class="align-middle">Alamat</th>
                    <th class="align-middle">Nomor Telepon</th>
                    <th class="align-middle">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>
                    <?php 
                    $NoReg  =$_POST['no'];
                    echo $NoReg 
                    ?> 
                    </td>

                    <td>
                        <?php 
                        $NIM    =$_POST['NIM'];
                        echo $NIM;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $Nama   =$_POST['nama'];
                        echo $Nama;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $gender =$_POST['gender'];
                        echo $gender;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $birthloc =$_POST['birthloc'];
                        echo $birthloc;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $birthdate =$_POST['birthdate'];
                        echo $birthdate;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $prodi  =$_POST['prodi'];
                        echo $prodi;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $alamat =$_POST['alamat'];
                        echo $alamat;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $phone  =$_POST['phone'];
                        echo $phone;
                        ?>
                    </td> 

                    <td>
                        <?php 
                        $email  =$_POST['email'];
                        echo $email;
                        ?>
                    </td> 

            </tbody>
        </table>
    </div>
</div>
<script>
document.body.style.backgroundColor = "#4f6e9c";
</script>