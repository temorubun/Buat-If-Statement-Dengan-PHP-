<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>Tugas PHP</title>
    
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <div class="agungContainer">

            <h1 class="tittle">IF STATEMENT</h1>

            <h2 class="tittle">PHP</h2><br><br><br>

            <h2 class="subtitle">Bilangan Bulat Positif Atau Negatif!</h2>  

            <form>
                
                <label for="positifnegatif" class="label">Masukkan Nilai:</label>
                
                <input type="number" id="positifnegatif" name="positifnegatif" placeholder="Masukan Nilai " class="input">

                <br><br>
                
                <button type="submit" name="Positif-Negatif" class="button">Hitung</button>
                
                <input type="reset" value="Bersihkan" class="button">
              
            </form>
              
            <div id="Hasil">

                <?php

                    if (isset($_GET["Positif-Negatif"])){

                        $bilangan = $_GET["positifnegatif"];

                        if ($bilangan > 0) {
                        
                            echo "Bilangan $bilangan adalah bilangan positif.";
    
                        } else if ($bilangan < 0) {
        
                            echo "Bilangan $bilangan adalah bilangan negatif.";
    
                        } else {
        
                            echo "Bilangan $bilangan adalah nol.";
    
                        }

                    }
                    
                ?>

            </div>

            <br><br><br>

            <h2 class="subtitle">Bilangan Bulat Genap Atau Ganjil!</h2>  

            <form>
                
                <label for="genapganjil" class="label">Masukkan Nilai:</label>
                
                <input type="number" id="genapganjil" name="genapganjil" placeholder="Masukan Nilai " class="input">

                <br><br>
                
                <button type="submit" name="Genap-Ganjil" class="button">Hitung</button>
                
                <input type="reset" value="Bersihkan" class="button">
              
            </form>
              
            <div id="Hasil">

                <?php

                    if (isset($_GET["Genap-Ganjil"])){

                        $angka = $_GET["genapganjil"]; 
                      
                        if ($angka % 2 == 0) {
                        
                            echo $angka . " adalah bilangan genap";
                        
                        } else {
                        
                            echo $angka . " adalah bilangan ganjil";
                        
                        }                      

                    }
                    
                ?>

            </div>

            <br><br><br>

            <h2 class="subtitle">Mengecek Apakah Siswa Lulus Atau Tidak</h2>  

            <form>
    
                <label for="lulustidaklulus" class="label">Masukkan Nilai:</label>
    
                <input type="number" id="lulustidaklulus" name="lulustidaklulus" placeholder="Masukan Nilai " class="input">

                <br><br>
    
                <button type="submit" name="Lulus-TidakLulus" class="button">Hitung</button>
    
                <input type="reset" value="Bersihkan" class="button">
  
            </form>
  
            <div id="Hasil">

                <?php

                    if (isset($_GET["Lulus-TidakLulus"])){

                    $nilai = $_GET["lulustidaklulus"]; 
          
                    if ($nilai >= 60) {
            
                        echo "Selamat, kamu lulus!";
            
                    } else {
             
                    echo "Maaf, kamu tidak lulus.";
            
                     }                     

                    }
        
                ?>

            </div>

            <br><br><br>

            <h2 class="subtitle">Membalikkan Kata Atau Kalimat</h2>  

            <form>

                <label for="katakalimat" class="label">Masukkan Kata</label>

                <input type="text" id="katakalimat" name="katakalimat" placeholder="Masukan Kata " class="input">

                <br><br>

                <button type="submit" name="Kata-Kalimat" class="button">Periksa</button>

                <input type="reset" value="Bersihkan" class="button">

            </form>

            <div id="Hasil">

                <?php

                    if (isset($_GET["Kata-Kalimat"])){

                        $kata = $_GET["katakalimat"];

                        $kata_balik = strrev($kata); 
      
                        if ($kata == $kata_balik) {
         
                            echo $kata . " adalah palindrom";
        
                        } else {
         
                            echo $kata . " bukan palindrom";
        
                        }

                    }

                ?>

            </div>

            <br><br><br>

            <h2 class="subtitle">Mengecek Tahun Kabisat Atau Tidak</h2>  

            <form>

                <label for="tahun" class="label">Masukkan Tahun</label>

                <input type="text" id="tahun" name="tahun" placeholder="Masukan Tahun " class="input">

                <br><br>

                <button type="submit" name="Tahun" class="button">Periksa</button>

                <input type="reset" value="Bersihkan" class="button">

            </form>

            <div id="Hasil">

                <?php

                    if (isset($_GET["Tahun"])){

                        $tahun =  $_GET["tahun"];

                        if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
                        
                            echo $tahun . " adalah tahun kabisat";
                        
                        } else {
                        
                            echo $tahun . " bukan tahun kabisat";
                        
                        }

                    }

                ?>

            </div>

            <br><br><hr>

            <footer>
                
                <p>CopyRaight Agung Hendi Temorubun 2023</p>

            </footer>

        </div>

    </body>

</html>
