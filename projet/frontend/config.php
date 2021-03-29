<!DOCTYPE html>
<html lang="fr">
<head>
	<title>IMT i Manger Mieux</title>
    <link rel="stylesheet" type="text/css" href="config.css" media="screen" />
</head>

<body>
    <div id="title" text-align="center">
        <br/>
        <h1>IMT <i>i Manger Mieux</i></h1>
    </div>

    <div id="navigation" text-align="center">
        <ul>
            <li><a id="getid_config" href="config.php">Config</a></li>
            <li><a id="getid_journal" href="journal.php">Journal</a></li>
            <li><a id="getid_aliments" href="aliments.php">Aliments</a></li>
            <li><a id="getid_profil" href="profil.php">Profil</a></li>
        </ul>
    </div>

    <div>
        <button id="btn_update" type="button" class="btn bg-info">
            Choisir la periode  
        </button>
	    <table id="myTable" border="1" text-align="center">
			<thead>
				<tr>
                    <th>Energie(kJ)</th>
                    <td id="energie">0</td>
                </tr>
				<tr>
                    <th>Glucide</th>
                    <td id="glucide">0</td></tr>
				<tr>
                    <th>Lipide</th><td id="lipide">0</td>
                </tr>
                <tr>
                    <th>Proteine</th>
                    <td id="proteine">0</td></tr>
                <tr>
                    <th>Sel</th>
                    <td id="sel">0</td>
                </tr>
                <tr>
                    <th>Sucre</th>
                    <td id="sucre">0</td>
                </tr>
			</thead>
		</table>	    
    </div>
</body>
</html>
