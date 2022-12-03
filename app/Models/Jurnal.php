<?php

namespace App\Models;

// Create class Berita

class Jurnal
{
    // Create class berita_artikel
    private static $jurnal_artikel = [
        [
            "judul" => "The role of information technology in the organization: a review, model, and assessment",
            "slug" => "judul-pertama",
            "penulis" => "Todd Dewetta Gareth RJonesa",
            "kutipan" => "This paper reviews and extends recent scholarly and popular literature to provide a broad overview",
            "isi" => "This paper reviews and extends recent scholarly and popular literature to provide a broad overview of how information technology (IT) impacts organizational characteristics and outcomes. First, based on a review of the literature, we describe two of the principal performance enhancing benefits of IT: information efficiencies and information synergies, and identify five main organizational outcomes of the application of IT that embody these benefits. We then discuss the role that IT plays in moderating the relationship between organizational characteristics including structure, size, learning, culture, and interorganizational relationships and the most strategic outcomes, organizational efficiency and innovation. Throughout we discuss the limitations and possible negative consequences of the use of IT and close by considering several key areas for future research."
        ],
        [
            "judul" => "Information Technology and Corporate Strategy: A Research Perspective",
            "slug" => "judul-kedua",
            "penulis" => "J. Yannis Bakos and Michael E. Treacy",
            "kutipan" => "The use of information technology (IT) as a competitive weapon has become a popular cliche",
            "isi" => "The use of information technology (IT) as a competitive weapon has become a popular cliche; but there is still a marked lack of understanding of the issues that determine the influence of information technology on a particular organization and the processes that will allow a smooth coordination of technology and corporate strategy. This article surveys the major efforts to arrive at a relevent framework, and attempts to integrate them in a more comprehensive viewpoint. The focus then turns to the major research issues in understanding the impact of information technology on competitive strategy."
        ],
        [
            "judul" => "The role of information technology in the organization: a review, model, and assessment",
            "slug" => "judul-ketiga",
            "penulis" => "Todd Dewetta Gareth RJonesa",
            "kutipan" => "This paper reviews and extends recent scholarly and popular literature to provide a broad overview",
            "isi" => "This paper reviews and extends recent scholarly and popular literature to provide a broad overview of how information technology (IT) impacts organizational characteristics and outcomes. First, based on a review of the literature, we describe two of the principal performance enhancing benefits of IT: information efficiencies and information synergies, and identify five main organizational outcomes of the application of IT that embody these benefits. We then discuss the role that IT plays in moderating the relationship between organizational characteristics including structure, size, learning, culture, and interorganizational relationships and the most strategic outcomes, organizational efficiency and innovation. Throughout we discuss the limitations and possible negative consequences of the use of IT and close by considering several key areas for future research."
        ],
        [
            "judul" => "Information Technology and Corporate Strategy: A Research Perspective",
            "slug" => "judul-keempat",
            "penulis" => "J. Yannis Bakos and Michael E. Treacy",
            "kutipan" => "The use of information technology (IT) as a competitive weapon has become a popular cliche",
            "isi" => "The use of information technology (IT) as a competitive weapon has become a popular cliche; but there is still a marked lack of understanding of the issues that determine the influence of information technology on a particular organization and the processes that will allow a smooth coordination of technology and corporate strategy. This article surveys the major efforts to arrive at a relevent framework, and attempts to integrate them in a more comprehensive viewpoint. The focus then turns to the major research issues in understanding the impact of information technology on competitive strategy."
        ],
        [
            "judul" => "The role of information technology in the organization: a review, model, and assessment",
            "slug" => "judul-kelima",
            "penulis" => "Todd Dewetta Gareth RJonesa",
            "kutipan" => "This paper reviews and extends recent scholarly and popular literature to provide a broad overview",
            "isi" => "This paper reviews and extends recent scholarly and popular literature to provide a broad overview of how information technology (IT) impacts organizational characteristics and outcomes. First, based on a review of the literature, we describe two of the principal performance enhancing benefits of IT: information efficiencies and information synergies, and identify five main organizational outcomes of the application of IT that embody these benefits. We then discuss the role that IT plays in moderating the relationship between organizational characteristics including structure, size, learning, culture, and interorganizational relationships and the most strategic outcomes, organizational efficiency and innovation. Throughout we discuss the limitations and possible negative consequences of the use of IT and close by considering several key areas for future research."
        ],
        [
            "judul" => "Information Technology and Corporate Strategy: A Research Perspective",
            "slug" => "judul-keenam",
            "penulis" => "J. Yannis Bakos and Michael E. Treacy",
            "kutipan" => "The use of information technology (IT) as a competitive weapon has become a popular cliche",
            "isi" => "The use of information technology (IT) as a competitive weapon has become a popular cliche; but there is still a marked lack of understanding of the issues that determine the influence of information technology on a particular organization and the processes that will allow a smooth coordination of technology and corporate strategy. This article surveys the major efforts to arrive at a relevent framework, and attempts to integrate them in a more comprehensive viewpoint. The focus then turns to the major research issues in understanding the impact of information technology on competitive strategy."
        ]

        ];
        public static function all()
        {
            return collect(self::$jurnal_artikel);
        }

        public static function find($slug)
        {
            $jurnal = static::all();
            return $jurnal->firstWhere('slug', $slug);
        }
        
}