<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Nakshatra\Object;

use Jyotish\Panchanga\Nakshatra\Nakshatra;
use Jyotish\Graha\Graha;
use Jyotish\Tattva\Jiva\Nara\Deva;
use Jyotish\Tattva\Jiva\Nara\Manusha;
use Jyotish\Tattva\Jiva\Pasu\Pasu;
use Jyotish\Tattva\Maha\Guna;
use Jyotish\Tattva\Ayurveda\Prakriti;

/**
 * Class of nakshatra 24.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N24 extends NakshatraObject {
	/**
	 * Nakshatra key
	 * 
	 * @var int
	 */
	protected $nakshatraKey = 24;
	
	/**
	 * Devanagari title 'shatabhisha' in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	protected $nakshatraTranslit = ['sha','ta','bha','i','ssa','aa'];
	
	/**
	 * Type of nakshatra.
	 * 
	 * @var string
	 * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 11.
	 */
	protected $nakshatraType = Nakshatra::TYPE_CHARANA;
	
	protected $nakshatraDeva = Deva::DEVA_VARUNA;
	protected $nakshatraEnergy = Nakshatra::ENERGY_LAYA;
	protected $nakshatraGana = Manusha::GANA_RAKSHASA;
	protected $nakshatraGender = Manusha::GENDER_NEUTER;
	protected $nakshatraGraha = Graha::GRAHA_RA;
	protected $nakshatraGuna = Guna::GUNA_TAMA;
	protected $nakshatraPurushartha = Manusha::PURUSHARTHA_DHARMA;
	protected $nakshatraVarna = Manusha::VARNA_UGRA;
	protected $nakshatraPrakriti = Prakriti::PRAKRITI_VATA;
	protected $nakshatraYoni = array(
		'animal' => Pasu::ANIMAL_HORSE,
		'gender' => Manusha::GENDER_FEMALE,
	);
	protected $nakshatraRajju = array(
		'lift' => Nakshatra::LIFT_AVAROHA,
		'limb' => Nakshatra::LIMB_KANTHA,
	);

	public function __construct($options) {
		parent::__construct($options);
	}

}