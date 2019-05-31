// function to convert FtoC or CtoF
function convert_temp(source, dest, field){
   dest = dest.trim();
   source = source.trim();
   if (source == dest) return field;
   if (source == 'C') return field * (9 / 5) + 32;
   return (field - 32) * 5 / 9;
}

//function to convert wind 
function convert_wind(source, dest, field){
   dest = dest.trim();
   source = source.trim();
   if (dest == source) return field;
   if (source == 'mph'  && dest == 'm/s') return field * 0.44704;
   if (source == 'mph'  && dest == 'km/h') return field * 1.609344;
   if (source == 'm/s'  && dest == 'mph') return field * 2.23694;
   if (source == 'm/s'  && dest == 'km/h') return field * 3.6; 
   if (source == 'km/h' && dest == 'mph') return field * 0.621371;
   return field * 0.277778;
}

//function to convert pressure 
function convert_pressure(source, dest, field){
   dest = dest.trim();
   source = source.trim();
   if (dest == source) return field;
   if (source == 'inHg' && dest == 'hPa') return field * 33.8639;
   if (source == 'inHg' && dest == 'mb') return field * 33.8639;
   if (source == 'hPa'  && dest == 'inHg') return field * 0.02953;
   if (source == 'hPa'  && dest == 'mb') return field; 
   if (source == 'mb' && dest == 'inHg') return field * 0.02953;
   return field;
}

//function to convert rain 
function convert_rain(source, dest, field){
   dest = dest.trim();
   source = source.trim();
   if (source == dest) return field;
   if (source == 'in') return field * 25.4;
   return field * 0.0393701;
}
