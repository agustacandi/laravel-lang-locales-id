<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => ":Attribute harus diterima.",
    "accepted_if" => ":Attribute harus diterima ketika :other berisi :value.",
    "active_url" => ":Attribute bukan URL yang valid.",
    "after" => ":Attribute harus berisi tanggal setelah :date.",
    "after_or_equal" => ":Attribute harus berisi tanggal setelah atau sama dengan :date.",
    "alpha" => ":Attribute hanya boleh berisi huruf.",
    "alpha_dash" => ":Attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.",
    "alpha_num" => ":Attribute hanya boleh berisi huruf dan angka.",
    "array" => ":Attribute harus berisi sebuah array.",
    "ascii" => ":Attribute hanya boleh berisi karakter dan simbol alfanumerik single-byte.",
    "attached" => ":Attribute sudah dilampirkan.",
    "before" => ":Attribute harus berisi tanggal sebelum :date.",
    "before_or_equal" => ":Attribute harus berisi tanggal sebelum atau sama dengan :date.",
    'between' => [
        "array" => "Konten ini harus memiliki panjang di antara :min dan :max item.",
        "file" => "Berkas ini harus berukuran di antara :min dan :max kilobyte.",
        "numeric" => "Nilai ini harus bernilai di antara :min dan :max.",
        "string" => "String ini harus memiliki panjang di antara :min dan :max karakter.",
    ],
    "boolean" => "Isian ini harus berisi true atau false.",
    "can" => "Bidang ini berisi nilai yang tidak sah.",
    "confirmed" => "Konfirmasi tidak sesuai.",
    "date" => "Isian ini bukan tanggal yang benar.",
    "date_equals" => "Isian ini harus berisi tanggal yang sama dengan :date.",
    "date_format" => "Isian ini tidak cocok dengan format :format.",
    "decimal" => "Bidang ini harus memiliki :decimal tempat desimal.",
    "declined" => "Isian ini harus ditolak.",
    "declined_if" => "Isian ini harus ditolak ketika :other bernilai :value.",
    "different" => "Nilai ini harus tidak sama dengan :other.",
    "digits" => "Isian ini harus berisi :digits digit.",
    "digits_between" => "Isian ini harus di antara :min dan :max digit.",
    "dimensions" => "Gambar ini tidak memiliki dimensi yang benar.",
    "distinct" => "Isian ini memiliki nilai duplikat.",
    "doesnt_end_with" => "Isian ini tidak boleh diakhiri dengan salah satu dari berikut ini: :values.",
    "doesnt_start_with" => "Isian ini tidak boleh dimulai dengan salah satu dari berikut ini: :values.",
    "email" => "Isian ini harus berisi format email yang benar.",
    "ends_with" => "Isian ini harus berakhiran dengan: :values.",
    "enum" => "Nilai yang dipilih tidak valid.",
    "exists" => "Nilai yang dipilih tidak sesuai.",
    "extensions" => "Bidang ini harus memiliki salah satu ekstensi berikut: :values.",
    "file" => "Konten harus berisi sebuah berkas.",
    "filled" => "Isian ini harus berisi sebuah nilai.",
    'gt' => [
        "array" => "Konten harus memiliki lebih dari :value item.",
        "file" => "Ukuran berkas harus berisi lebih besar dari :value kilobyte.",
        "numeric" => "Nilai harus lebih besar dari :value.",
        "string" => "String harus berisi lebih besar dari :value karakter.",

    ],
    'gte' => [
        "array" => "Konten harus memiliki :value item atau lebih.",
        "file" => "Ukuran konten harus berisi lebih besar dari atau setara :value kilobyte.",
        "numeric" => "Nilai harus berisi lebih besar dari atau setara :value.",
        "string" => "String harus berisi lebih besar dari atau setara :value karakter.",
    ],
    "hex_color" => "Bidang ini harus berupa warna heksadesimal yang valid.",
    "image" => "Isian ini harus berisi sebuah gambar.",
    "in" => "Pilihan nilai tidak sesuai.",
    "in_array" => "Nilai ini tidak ada di :other.",
    "integer" => "Isian ini harus berisi sebuah angka.",
    "ip" => "Isian ini harus berisi alamat IP yang valid.",
    "ipv4" => "Isian ini harus berisi alamat IPv4 yang valid.",
    "ipv6" => "Isian ini harus berisi alamat IPv6 yang valid.",
    "json" => "Isian ini harus berisi string JSON yang valid.",
    "lowercase" => "Isian ini harus berisi huruf kecil.",
    'lt' => [
        "array" => "Panjang array harus kurang dari :value item.",
        "file" => "Ukuran konten harus berisi kurang dari :value kilobyte.",
        "numeric" => "Nilai harus berisi kurang dari :value.",
        "string" => "String harus berisi kurang dari :value karakter.",

    ],
    'lte' => [
        "array" => "Panjang array harus lebih dari :value item.",
        "file" => "Ukuran konten harus berisi kurang dari atau setara :value kilobyte.",
        "numeric" => "Nilai harus berisi kurang dari atau setara :value.",
        "string" => "String harus berisi kurang dari atau setara :value karakter.",

    ],
    'mac_address' => 'Isian ini harus berisi alamat MAC yang valid.',
    'max' => [
        "array" => "Panjang array tidak boleh lebih dari :max item.",
        "file" => "Ukuran konten tidak boleh lebih besar dari :max kilobyte.",
        "numeric" => "Nilai tidak boleh lebih besar dari :max.",
        "string" => "String tidak boleh lebih besar dari :max karakter.",
    ],
    "max_digits" => "Isian ini tidak boleh memiliki lebih dari :max digit.",
    "mimes" => "Isian ini harus berisi sebuah berkas berjenis: :values.",
    "mimetypes" => "Isian ini harus berisi sebuah berkas berjenis: :values.",
    'min' => [
        "array" => "Panjang array harus minimal :min item.",
        "file" => "Ukuran konten harus berisi minimal :min kilobyte.",
        "numeric" => "Nilai harus berisi minimal :min.",
        "string" => "String harus berisi minimal :min karakter.",
    ],
    "min_digits" => "Isian ini tidak boleh memiliki kurang dari :min digit.",
    "missing" => "Bidang ini harus hilang.",
    "missing_if" => "Bidang ini harus hilang jika :other adalah :value.",
    "missing_unless" => "Bidang ini harus hilang kecuali :other adalah :value.",
    "missing_with" => "Bidang ini harus hilang jika ada :values.",
    "missing_with_all" => "Bidang ini harus hilang jika ada :values.",
    "multiple_of" => "Nilai harus merupakan kelipatan dari :value",
    "not_in" => "Pilihan nilai tidak sesuai.",
    "not_regex" => "Format ini tidak sesuai.",
    "numeric" => "Isian ini harus berisi angka.",
    'password' => [
        "letters" => "Isian password ini harus memiliki setidaknya satu karakter.",
        "mixed" => "Isian password ini harus memiliki setidaknya satu huruf kapital dan satu huruf kecil.",
        "numbers" => "Isian password ini harus memiliki setidaknya satu angka.",
        "symbols" => "Isian password ini harus memiliki setidaknya satu simbol.",
        "uncompromised" => "Isian password ini telah muncul di kebocoran data. Silahkan memilih isian password yang berbeda.",
    ],
    "present" => "Isian ini wajib ada.",
    "present_if" => "Bidang ini harus ada ketika :other adalah :value.",
    "present_unless" => "Bidang ini harus ada kecuali :other adalah :value.",
    "present_with" => "Bidang ini harus ada ketika :values ada.",
    "present_with_all" => "Bidang ini harus ada jika ada :values.",
    "prohibited" => "Isian ini tidak boleh ada.",
    "prohibited_if" => "Isian ini tidak boleh ada bila :other adalah :value.",
    "prohibited_unless" => "Isian ini tidak boleh ada kecuali :other memiliki nilai :values.",
    "prohibits" => "Isian ini melarang isian :other untuk ditampilkan.",
    "regex" => "Format ini tidak sesuai.",
    "relatable" => "Isian ini mungkin tidak berasosiasi dengan sumber ini.",
    "required" => "Isian ini wajib diisi",
    "required_array_keys" => "Isian ini wajib berisi entri untuk: :values",
    "required_if" => "Isian ini wajib diisi bila :other adalah :value.",
    "required_if_accepted" => "Isian ini wajib diisibila :other sesuai.",
    "required_unless" => "Isian ini wajib diisi jika :other berada dalam :values.",
    "required_with" => "Isian ini wajib diisi bila :values tersedia.",
    "required_with_all" => "Isian ini wajib diisi bila :values tersedia.",
    "required_without" => "Isian ini wajib diisi bila :values tidak tersedia.",
    "required_without_all" => "Isian ini wajib diisi bila tidak satupun :values tersedia.",
    "same" => "Nilai dari isian ini harus sesuai dengan :other.",
    'size' => [
        "array" => "Panjang array harus memiliki :size item.",
        "file" => "Ukuran konten harus berisi :size kilobyte.",
        "numeric" => "Nilai harus berisi :size.",
        "string" => "String harus berisi :size karakter.",

    ],
    "starts_with" => "Isian ini harus diawali salah satu dari berikut: :values.",
    "string" => "Isian ini harus berisi sebuah string.",
    "timezone" => "Isian ini harus berisi zona waktu yang valid.",
    "ulid" => "Kolom ini harus berupa ULID yang valid.",
    "unique" => "Isian ini sudah ada sebelumnya.",
    "uploaded" => "Berkas gagal diunggah.",
    "uppercase" => "Isian ini harus berisi huruf kapital.",
    "url" => "Format ini tidak valid.",
    "uuid" => "Isian ini harus merupakan UUID yang valid.",


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
