@extends('study.master')
@section('content')
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
@include('study.partials.banner')

<h1 id="title">About</h1>
<img src="/dist/img/vidathaLogo.jpg" class="img-fluid" alt="Cinque Terre" id="logo"/>
<h2 id="title">VIDATHA</h2>
<p id ="about_paragarph">&emsp;&emsp;<b>VIDATHA</b> The National Vidatha Network (NVN) seeks to transfer scientific knowledge and research innovations of scientists to the Micro, Small and Medium Entrepreneurs (MSME) at grassroots level through an island-wide network of Vidatha Resource Centers (VRC). The Vidatha programme was initiated in 2004, with a view to boosting the rural economy and enhancing its contribution to national economic development. It endeavors to capitalize the creativity and skills of rural people and to utilize their resourcefulness for the own economic upliftment. Towards this end, the programme expects quality products from the village reaching the marketplace thereby ensuring a stable income for the rural community. The programme transfers primary technologies free of charge, secondary technologies at a nominal price and tertiary technologies for a fair price.

In order to implement this programme, the Ministry has established a Vidatha Resource Centre (VRC) network covering the entire island and presently there are 260 centers representing 80% of the total number of DS divisions of the country.

Technology Transfer programmes are identified based on the availability of local resources and the needs of the relevant community. The process commences with a technology needs assessment of the village carried out by Field Coordinating Officers under the guidance of STOs. Subsequently appropriate technologies are transferred through hands-on training sessions conducted by Science and Technology Officers (STOs) of respective VRCs, Research Institutions functioning under the Ministry such as ITI, NERDC, ACCIMT etc and other relevant technology providers. Each VRC is equipped with basic training facilities and equipment such a bakery oven, a vegetable dehydrator, and virgin coconut oil extractor. Attention is also paid to augment the SME’s access to finances as well as to the market place. Facilitating low cost borrowings under special credit schemes and forging strong and sustainable links between SMEs and the distribution network are being facilitated.

Continuous focus is placed on improving the performance of VRCs and formulates their action plans in line with national priorities. During the reporting period, special emphasis was given to assist SMEs with medium technologies through VRCs.

The TT programmes includes following major categories

Technology Transfer Programmes 
Technology Awareness programmes 
ICT awareness programmes 
Special micro projects to facilitate identified entrepreneurs 
Need based assistance and facilitation (Financial supporting, business registration, information technology support and marketing facility etc).</p>
@endsection