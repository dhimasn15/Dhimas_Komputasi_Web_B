<?php

function ambil_nama($id_tulisan) {
    global $koneksi; 
    $sql1 = "SELECT * FROM halaman WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['nama']; 
            return $text; 
        }
    }
    
    
    return null; 
}
function ambil_bio($id_tulisan) {
    global $koneksi; 
    $sql1 = "SELECT * FROM halaman WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['bio']; 
            return $text; 
        }
    }
    
    
    return null; 
}
function ambil_button($id_tulisan) {
    global $koneksi; 
    $sql1 = "SELECT * FROM halaman WHERE id = '$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['button']; 
            return $text; 
        }
    }
    
    
    return null; 
}


function ambil_judul($id_judul) {
    global $koneksi; 
    $sql1 = "SELECT * FROM aboutme WHERE id = '$id_judul'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['judul']; 
            return $text; 
        }
    }
    
    
    return null; 
}
function ambil_teks1($id_teks1) {
    global $koneksi; 
    $sql1 = "SELECT * FROM aboutme WHERE id = '$id_teks1'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['teks1']; 
            return $text; 
        }
    }
    
    
    return null; 
}
function ambil_teks2($id_teks2) {
    global $koneksi; 
    $sql1 = "SELECT * FROM aboutme WHERE id = '$id_teks2'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['teks2']; 
            return $text; 
        }
    }
    
    
    return null; 
}
function ambil_teks3($id_teks3) {
    global $koneksi; 
    $sql1 = "SELECT * FROM aboutme WHERE id = '$id_teks3'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['teks3']; 
            return $text; 
        }
    }
    
    
    return null; 
}



// untuk projek
function judul3($id_judul3) {
    global $koneksi; 
    $sql1 = "SELECT * FROM project WHERE id = '$id_judul3'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['judul']; 
            return $text; 
        }
    }
    
    
    return null; 
}
function projek1($id_projek1) {
    global $koneksi; 
    $sql1 = "SELECT * FROM project WHERE id = '$id_projek1'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['projek1']; 
            return $text; 
        }
    }
    
    
    return null; 
}
function projek2($id_projek2) {
    global $koneksi; 
    $sql1 = "SELECT * FROM project WHERE id = '$id_projek2'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['projek2']; 
            return $text; 
        }
    }
    

}
function projek3($id_projek3) {
    global $koneksi; 
    $sql1 = "SELECT * FROM project WHERE id = '$id_projek3'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['projek3']; 
            return $text; 
        }
    }
    

}



// untuk education
function judul4($id_judul4) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_judul4'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['judul']; 
            return $text; 
        }
    }
    

}
function sekolah1($id_sekolah1) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_sekolah1'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['nama_sekolah1']; 
            return $text; 
        }
    }
    

}
function sekolah2($id_sekolah2) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_sekolah2'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['nama_sekolah2']; 
            return $text; 
        }
    }
    

}
function sekolah3($id_sekolah3) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_sekolah3'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['nama_sekolah3']; 
            return $text; 
        }
    }
    

}
function sekolah4($id_sekolah4) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_sekolah4'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['nama_sekolah4']; 
            return $text; 
        }
    }
    
    
}
function des1($id_des1) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_des1'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['deskripsi1']; 
            return $text; 
        }
    }
    
    
}
function des2($id_des2) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_des2'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['deskripsi2']; 
            return $text; 
        }
    }
    


}
function des3($id_des3) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_des3'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['deskripsi3']; 
            return $text; 
        }
    }
    

}
function des4($id_des4) {
    global $koneksi; 
    $sql1 = "SELECT * FROM education WHERE id = '$id_des4'";
    $q1 = mysqli_query($koneksi, $sql1);
    
    
    if ($q1) {
        $r1 = mysqli_fetch_array($q1);
        if ($r1) {
            $text = $r1['deskripsi4']; 
            return $text; 
        }
    }
    

} 

?>
