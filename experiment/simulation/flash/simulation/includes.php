<script type="text/javascript" language="javascript">var simPath="<?php getSimPath(); ?>";</script>

<link  href="<?php getSimCss('simstyle.css'); ?>" rel="stylesheet" type="text/css" />
<link  href="./js/trip/trip.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="./js/jquery.i18n.js"></script>
<script language="javascript" type="text/javascript" src="./js/trip/trip.min.js"></script>
<script type="text/javascript" src="<?php getSimPath(); ?>js/simcontrols.js"></script>
<script src="js/jquery/ui/1.8.21/jquery-ui.min.js" language="javascript"></script>


<script type="text/javascript" language="javascript" src="./js/touchconvert.js"></script>
<?php 
	$language=$_GET['elink_lan'];
	$locale = array("en-IN","ml-IN","hi-IN");
	if (!in_array($language, $locale)){
		$language = $locale[0];
	}
?>
<script language="javascript"  >
var language_script= '<?php echo $language ;?>';
var language=language_script.toString();
	language=language.slice(0, 2);
	var gt=$;
	gt.gettext.setLocale(language);
</script>
<script type='text/javascript'  src='<?php getSimPath()?>./locale/<?php echo $language ?>/language.json'></script>

