    <?php
    function skor_terbesar($arr){
    //kode di sini
        $output=[];
        $nilai=0;
        $nilai_1=0;
        $nilai_2=0;
        foreach($arr as $key => $value){
            if($value['nilai']>$nilai and $value['kelas'] =='Laravel'){
                $nilai=$value['nilai'];
            }
            else if($value['nilai']>$nilai_1 and $value['kelas'] =='React Native'){
                $nilai_1=$value['nilai'];
            }
            else if($value['nilai']>$nilai_2 and $value['kelas'] == 'React JS'){
                $nilai_2=$value['nilai'];
            }
            else{
                continue;
            }
            $output[$value['kelas']] =
            [
                'nama' => $value['nama'],
                'kelas' => $value['kelas'],
                'nilai' => $value['nilai']
            ];
        }
        echo"<pre>";
        return $output;
        echo"</pre>";

    }

    // TEST CASES
    $skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
    ];

    print_r(skor_terbesar($skor));
    /* OUTPUT
    Array (
        [Laravel] => Array
                (
                    [nama] => Aghnat
                    [kelas] => Laravel
                    [nilai] => 90
                )
        [React Native] => Array
                    (
                        [nama] => Regi
                        [kelas] => React Native
                        [nilai] => 86
                    )
        [React JS] => Array
                    (
                    [nama] => Indra
                    [kelas] => React JS
                    [nilai] => 85
                    )
    )
    */
    ?>