let optList = document.getElementById('opt_assist').options;
let optTwo  = [
{
	text: '-- Choose your Services --',
	selected: true
},
{
	text: 'Securing Social Case Study Report',
	value: 'Securing Social Case Study Report',
},
{
	text: 'Provison of Assistance to Individual in Crisis Situation',
	value: 'rovison of Assistance to Individual in Crisis Situation',
},
{
	text: 'Issuance of Certificate of Indigency',
	value: 'Issuance of Certificate of Indigency',
},
{
	text: 'Provision of Assistance to Person with Disability',
	value: 'Provision of Assistance to Person with Disability',
},
{
	text: 'Services to Older Persons',
	value: 'Services to Older Persons',
},
{
	text: 'Psychological Intervention to Children in Need of Special Protection',
	value: 'Psychological Intervention to Children in Need of Special Protection',
},
{
	text: 'Psychosocial Intervention to Children in Conflict with the Law and Children at Risk',
	value: 'Psychosocial Intervention to Children in Conflict with the Law and Children at Risk',
},
{
	text: 'Social Services for Solo Parents',
	value: 'Social Services for Solo Parents',
},
{
	text: 'Assistance to Women in Especially Difficult Circumstances',
	value: 'Assistance to Women in Especially Difficult Circumstances',
},
{
	text: 'Conduct of Pre-Marriage Counselling',
	value: 'Conduct of Pre-Marriage Counselling',
},
{
	text: 'Provision of Emergency Shelter Assistance',
	value: 'Provision of Emergency Shelter Assistance',
},
{
	text: 'Provision of Relief Assistance',
	value: 'Provision of Relief Assistance',
},
{
	text: 'Provision of Day Care Services Program',
	value: 'Provision of Day Care Services Program',
}
];

optTwo.forEach(option => optList.add(new Option(option.text, option.value, option.selected)));