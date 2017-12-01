
	var cname=0;
	var eml=0;
	var msg=0;
	var aname=0;
	
	
	
	function checkcname()
	{
		if(document.getElementById('cname').value<=0)
		{
			document.getElementById('target_cname').innerHTML="&nbsp;<font color=\"red\">*</font>";
			cname=0;
		}
		else
		{
			document.getElementById('target_cname').innerHTML="";
			cname=1;
		}		
    }
	
	function checkceid()
	{
		 var arr = new Array(
                '.com','.net','.org','.biz','.coop','.info','.museum','.name','.pro',
                '.edu','.gov','.int','.mil','.ac','.ad','.ae','.af','.ag','.ai','.al',
                '.am','.an','.ao','.aq','.ar','.as','.at','.au','.aw','.az','.ba','.bb',
                '.bd','.be','.bf','.bg','.bh','.bi','.bj','.bm','.bn','.bo','.br','.bs',
                '.bt','.bv','.bw','.by','.bz','.ca','.cc','.cd','.cf','.cg','.ch','.ci',
                '.ck','.cl','.cm','.cn','.co','.cr','.cu','.cv','.cx','.cy','.cz','.de',
                '.dj','.dk','.dm','.do','.dz','.ec','.ee','.eg','.eh','.er','.es','.et',
                '.fi','.fj','.fk','.fm','.fo','.fr','.ga','.gd','.ge','.gf','.gg','.gh',
                '.gi','.gl','.gm','.gn','.gp','.gq','.gr','.gs','.gt','.gu','.gv','.gy',
                '.hk','.hm','.hn','.hr','.ht','.hu','.id','.ie','.il','.im','.in','.io',
                '.iq','.ir','.is','.it','.je','.jm','.jo','.jp','.ke','.kg','.kh','.ki',
                '.km','.kn','.kp','.kr','.kw','.ky','.kz','.la','.lb','.lc','.li','.lk',
                '.lr','.ls','.lt','.lu','.lv','.ly','.ma','.mc','.md','.mg','.mh','.mk',
                '.ml','.mm','.mn','.mo','.mp','.mq','.mr','.ms','.mt','.mu','.mv','.mw',
                '.mx','.my','.mz','.na','.nc','.ne','.nf','.ng','.ni','.nl','.no','.np',
                '.nr','.nu','.nz','.om','.pa','.pe','.pf','.pg','.ph','.pk','.pl','.pm',
                '.pn','.pr','.ps','.pt','.pw','.py','.qa','.re','.ro','.rw','.ru','.sa',
                '.sb','.sc','.sd','.se','.sg','.sh','.si','.sj','.sk','.sl','.sm','.sn',
                '.so','.sr','.st','.sv','.sy','.sz','.tc','.td','.tf','.tg','.th','.tj',
                '.tk','.tm','.tn','.to','.tp','.tr','.tt','.tv','.tw','.tz','.ua','.ug',
                '.uk','.um','.us','.uy','.uz','.va','.vc','.ve','.vg','.vi','.vn','.vu',
                '.ws','.wf','.ye','.yt','.yu','.za','.zm','.zw',
				'.COM','.NET','.ORG','.BIZ','.COOP','.INFO','.MUSEUM','.NAME','.PRO',
                '.EDU','.GOV','.INT','.MIL','.AC','.AD','.AE','.AF','.AG','.AI','.AL',
                '.AM','.AN','.AO','.AQ','.AR','.AS','.AT','.AU','.AW','.AZ','.BA','.BB',
                '.BD','.BE','.BF','.BG','.BH','.BI','.BJ','.BM','.BN','.BO','.BR','.BS',
                '.BT','.BV','.BW','.BY','.BZ','.CA','.CC','.CD','.CF','.CG','.CH','.CI',
                '.CK','.CL','.CM','.CN','.CO','.CR','.CU','.CV','.CX','.CY','.CZ','.DE',
                '.DJ','.DK','.DM','.DO','.DZ','.EC','.EE','.EG','.EH','.ER','.ES','.ET',
                '.FI','.FJ','.FK','.FM','.FO','.FR','.GA','.GD','.GE','.GF','.GG','.GH',
                '.GI','.GL','.GM','.GN','.GP','.GQ','.GR','.GS','.GT','.GU','.GV','.GY',
                '.HK','.HM','.HN','.HR','.HT','.HU','.ID','.IE','.IL','.IM','.IN','.IO',
                '.IQ','.IR','.IS','.IT','.JE','.JM','.JO','.JP','.KE','.KG','.KH','.KI',
                '.KM','.KN','.KP','.KR','.KW','.KY','.KZ','.LA','.LB','.LC','.LI','.LK',
                '.LR','.LS','.LT','.LU','.LV','.LY','.MA','.MC','.MD','.MG','.MH','.MK',
                '.ML','.MM','.MN','.MO','.MP','.MQ','.MR','.MS','.MT','.MU','.MV','.MW',
                '.MX','.MY','.MZ','.NA','.NC','.NE','.NF','.NG','.NI','.NL','.NO','.NP',
                '.NR','.NU','.NZ','.OM','.PA','.PE','.PF','.PG','.PH','.PK','.PL','.PM',
                '.PN','.PR','.PS','.PT','.PW','.PY','.QA','.RE','.RO','.RW','.RU','.SA',
                '.SB','.SC','.SD','.SE','.SG','.SH','.SI','.SJ','.SK','.SL','.SM','.SN',
                '.SO','.SR','.ST','.SV','.SY','.SZ','.TC','.TD','.TF','.TG','.TH','.TJ',
                '.TK','.TM','.TN','.TO','.TP','.TR','.TT','.TV','.TW','.TZ','.UA','.UG',
                '.UK','.UM','.US','.UY','.UZ','.VA','.VC','.VE','.VG','.VI','.VN','.VU',
                '.WS','.WF','.YE','.YT','.YU','.ZA','.ZM','.ZW');

                 var sd = document.getElementById('ceid').value;
                 var ids = sd.split("\n");
                 var val = true;

                 for(var j=0; j<ids.length; j++)
                  {
                    var mai = ids[j];
                    var dot = mai.lastIndexOf(".");
                    var ext = mai.substring(dot,mai.length);
                    var at = mai.indexOf("@");
                    var dom = dot - at;
                       var sp = mai.indexOf(" ");
                    if(dom >= 4 && at > 1 && sp == -1)
                    {

                        for(var i=0; i<arr.length; i++)
                        {
                            if(ext == arr[i])
                            {
                            val = true;
                            break;
                            }
                            else
                            {
                            val = false;
                            }
                        }
                        if(val == false)
                        {
                            eml=0;
                            document.getElementById("target_ceid").innerHTML="&nbsp;<font color=\"red\">*</font>";
                            return false;
                        }
						else if(val == true)
                        {
                            eml=1;
                            document.getElementById("target_ceid").innerHTML="";
                            return true;
                        }
                    }
                    else
                    {
                        eml=0;
                        document.getElementById("target_ceid").innerHTML="&nbsp;<font color=\"red\">*</font>";
                        return false;
                    }
                }
	
		}
		
		function checkmsg()
		{
			if(document.getElementById('cmsg').value<=0)
			{
				document.getElementById('target_cnmsg').innerHTML="&nbsp;<font color=\"red\">*</font>";
				msg=0;
			}
			else
			{
				document.getElementById('target_cnmsg').innerHTML="";
				msg=1;
			}
		}			
		
		function contactdetail()
		{
			if(cname==1 && eml==1 && msg==1)
			{
				return (true);
			}
			else
			{
				return (false);
			}
			return (false);
		}			