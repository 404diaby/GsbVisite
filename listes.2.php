<form name="frmE" action="index.php?choixTraitement=visite&action=validerAjouterEchantillon" method="post" onsubmit="return valider(this)">	
<fieldset>	<legend>Médicament</legend>
	<table>
		<tr><th style='width:120px;'>Famille</th>	<td>
		<select name='lstFamilles' style='width:350px;'  onChange='lesMedicamentsFamille(this.name, this.value)'>
			option selected value="A">Antalgiques (4)</option>
			<option value="AB">Antibiotiques (15)</option>
			<option value="AD">antidépresseurs (4)</option>
			<option value="AI">anti-inflammatoires (5)</option>
		</select>
		</td>
		</tr>
		
		<tr><th style='width:120px;'>Médicament </th>	<td>
		<select name='lstMedicaments' style='width:350px;'>
			<option selected value="BITALV">BIVALIC</option>
			<option value="CARTION6">CARTION</option>
			<option value="DOLRIL7">DOLORIL</option>
			<option value="PARMOL16">PARMOCODEINE</option>
		</select>
		</td>
		</tr>
	</table>
</fieldset>
</form>


<script type="text/javascript">
  // Mon code Javascript
function  lesMedicamentsFamille(liste, choix)
	{
lesMedicaments = new Array(["BITALV","BIVALIC","A"],["CARTION6","CARTION","A"],["DOLRIL7","DOLORIL","A"],["PARMOL16","PARMOCODEINE","A"],["ADIMOL9","ADIMOL","AB"],["AMOPIL7","AMOPIL","AB"],["AMOX45","AMOXAR","AB"],["AMOXIG12","AMOXI Gé","AB"],["APATOUX22","APATOUX Vitamine C","AB"],["BACTIG10","BACTIGEL","AB"],["BACTIV13","BACTIVIL","AB"],["CLAZER6","CLAZER","AB"],["JOVAI8","JOVENIL","AB"],["LIDOXY23","LIDOXYTRACINE","AB"],["PIRIZ8","PIRIZAN","AB"],["POMDI20","POMADINE","AB"],["TXISOL22","TOUXISOL Vitamine C","AB"],["3MYC7","TRIMYCINE","AB"],["URIEG6","URIREGUL","AB"],["DEPRIL9","DEPRAMIL","AD"],["DIMIRTAM6","DIMIRTAM","AD"],["LITHOR12","LITHORINE","AD"],["TROXT21","TROXADET","AD"],["EQUILARX6","EQUILAR","AI"],["EVILR7","EVEILLOR","AI"],["INSXT5","INSECTIL","AI"],["DORNOM8","NORMADOR","AI"],["PHYSOI8","PHYSICOR","AI"]);
	  
	  for (i=document.forms["frmE"].elements["lstMedicaments"].length; i>=0; i--)
	  {document.forms["frmE"].elements["lstMedicaments"].options[i]=null;}
	  var option=0;
	  for (var i = 0; i < lesMedicaments.length; i++) 
		{
		if (lesMedicaments[i][2]==choix) 
			{		
				document.forms["frmE"].elements["lstMedicaments"].options[option]=new Option(lesMedicaments[i][1],lesMedicaments[i][0]);
				option++;
			}
		}
	}
</script>