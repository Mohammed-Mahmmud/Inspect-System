<?php

use App\Models\Dashboard\Accept;
use App\Models\Dashboard\Section;
use Illuminate\Support\Facades\App;

if ( !function_exists( 'getSectionName' ) ) {

    function getSectionName( $id )
 {
        if ( $id ) {
            $section = Section::where( 'id', $id )->first( 'name' );
            $name = json_decode( $section, true );
            $section_name = $name[ 'name' ][ App::getLocale() ];
        } else {
            $section_name = 'Null';
        }
        return $section_name;
    }
}
if ( !function_exists( 'getNextDate' ) ) {
    function getNextDate( $date, $months ) {

        return ( new DateTime( $date ) )->modify( '+' . $months . ' months' )->modify( '-1 day' )->format( 'Y-m-d' );
    }

}
if ( !function_exists( 'getNextYear' ) ) {
    function getNextYear( $date ) {

        return ( new DateTime( $date ) )->modify( '+12 months' )->modify( '-1 day' )->format( 'Y-m-d' );
    }

}

if ( !function_exists( 'getDeCode' ) ) {
    function getDeCode( $data = null )
 {
        if ( isset( $data ) && is_string( $data ) ) {
            return json_decode( $data, true );
        } else {
            return [];
        }
    }
}
if ( !function_exists( 'getAccecpance' ) ) {
    function getAccecpance( $value )
 {
        if ( isset( $value ) ) {
            return Accept::where( 'value', $value )->value( 'name' );
        } else {
            return ' ' ;
        }
    }
}

