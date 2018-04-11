    $(function(){
        $('#table-clients').bootstrapTable({
            url: 'http://localhost/tdSlim/slim/clients',
            columns: [{
                field: 'nom',
                title: 'Nom'
            }, {
                field: 'prenom',
                title: 'Prénom'
            }, {
                field: 'email',
                title: 'Adresse email'
            }, ]
        });
	});