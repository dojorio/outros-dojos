#language:pt
Funcionalidade: "Criar e-mail pra teste"
	eu como tester
	desejo criar um e-mail para testes
	para testar a funcionalidade

	@javascript
	Cenário: Criação de conta de e-mail
		Dado estou em "http://mailinator.com"
		E preencho "Check Any Inbox!" com "phpwomen"
		E pressiono "Go!" 
		Entao espero o texto "phpwomen" aparecer 

	@javascript
	Cenário: Enviar email
		Dado envio email para "phpwomen@mailinator.com"