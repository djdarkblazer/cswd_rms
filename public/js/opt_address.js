let optionList = document.getElementById('rec_mode').options;
let options = [
{
	text: '-- Choose your Barangay --',
	selected: true
},
{
	text: 'Balingayan',
	value: 'Balingayan'
},
{
	text: 'Balite',
	value: 'Balite'
},
{
	text: 'Baruyan',
	value: 'Baruyan'
},
{
	text: 'Batino',
	value: 'Batino'
},
{
	text: 'Bayanan I',
	value: 'Bayanan I'
},
{
	text: 'Bayanan II',
	value: 'Bayanan II'
},
{
	text: 'Biga',
	value: 'Baruyan'
},
{
	text: 'Biga',
	value: 'Biga'
},
{
	text: 'Bondoc',
	value: 'Bondoc'
},
{
	text: 'Bucayao',
	value: 'Bucayao'
},
{
	text: 'Buhuan',
	value: 'Buhuan'
},
{
	text: 'Bulusan',
	value: 'Bulusan'
},
{
	text: 'Calero',
	value: 'Calero'
},
{
	text: 'Camansihan',
	value: 'Camansihan'
},
{
	text: 'Camilmil',
	value: 'Camilmil'
},
{
	text: 'Canubing I',
	value: 'Canubing I'
},
{
	text: 'Canubing II',
	value: 'Canubing II'
},
{
	text: 'Comunal',
	value: 'Comunal'
},
{
	text: 'Guinobatan',
	value: 'Guinobatan'
},
{
	text: 'Gulod',
	value: 'Gulod'
},
{
	text: 'Gutad',
	value: 'Gutad'
},
{
	text: 'Ibaba East',
	value: 'Ibaba East'
},
{
	text: 'Ibaba West',
	value: 'Ibaba West'
},
{
	text: 'Ilaya',
	value: 'Ilaya'
},
{
	text: 'Lalud',
	value: 'Lalud'
},
{
	text: 'Lazareto',
	value: 'Lazareto'
},
{
	text: 'Libis',
	value: 'Libis'
},
{
	text: 'Lumangbayan',
	value: 'Lumangbayan'
},
{
	text: 'Mahal na Pangalan',
	value: 'Mahal na Pangalan'
},
{
	text: 'Maidlang',
	value: 'Maidlang'
},
{
	text: 'Malad',
	value: 'Malad'
},
{
	text: 'Malamig',
	value: 'Malamig'
},
{
	text: 'Managpi',
	value: 'Managpi'
},
{
	text: 'Masipit',
	value: 'Masipit'
},
{
	text: 'Nag‑Iba I',
	value: 'Nag‑Iba I'
},
{
	text: 'Nag‑Iba II',
	value: 'Nag‑Iba II'
},
{
	text: 'Navotas',
	value: 'Navotas'
},
{
	text: 'Pachoca',
	value: 'Pachoca'
},
{
	text: 'Palhi',
	value: 'Palhi'
},
{
	text: 'Panggalaan',
	value: 'Panggalaan'
},
{
	text: 'Parang',
	value: 'Parang'
},
{
	text: 'Patas',
	value: 'Patas'
},
{
	text: 'Personas',
	value: 'Personas'
},
{
	text: 'Putingtubig',
	value: 'Putingtubig'
},
{
	text: 'Salong',
	value: 'Salong'
},
{
	text: 'San Antonio',
	value: 'San Antonio'
},
{
	text: 'San Vicente Central',
	value: 'San Vicente Central'
},
{
	text: 'San Vicente East',
	value: 'San Vicente East'
},
{
	text: 'San Vicente North',
	value: 'San Vicente North'
},
{
	text: 'San Vicente South',
	value: 'San Vicente South'
},
{
	text: 'San Vicente West',
	value: 'San Vicente West'
},
{
	text: 'Santa Cruz',
	value: 'Santa Cruz'
},
{
	text: 'Santa Isabel',
	value: 'Santa Isabel'
},
{
	text: 'Santa Maria Village',
	value: 'Santa Maria Village'
},
{
	text: 'Santa Rita',
	value: 'Santa Rita'
},
{
	text: 'Santo Niño',
	value: 'Santo Niño'
},
{
	text: 'Sapul',
	value: 'Sapul'
},
{
	text: 'Silonay',
	value: 'Silonay'
},
{
	text: 'Suqui',
	value: 'Suqui'
},
{
	text: 'Tawagan',
	value: 'Tawagan'
},
{
	text: 'Tawiran',
	value: 'Tawiran'
},
{
	text: 'Tibag',
	value: 'Tibag'
},
{
	text: 'Wawa',
	value: 'Wawa'
}
];

options.forEach(option =>
	optionList.add(
		new Option(option.text, option.value, option.selected)
		)
	);




