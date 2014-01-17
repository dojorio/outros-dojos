conversao1 = {0: "zero", 1: "um", 2: "dois", 3: "tres", 4: "quatro", 5: "cinco", 6: "seis", 7: "sete", 8: "oito", 9: "nove", 10: "dez", 11: "onze", 12: "doze", 13: "treze", 14: "quatorze", 15: "quinze", 16: "dezesseis", 17: "dezessete",
18: "dezoito", 19: "dezenove", 20: "vinte", 30: "trinta", 40: "quarenta", 50: "cinquenta", 60: "sessenta", 70: "setenta", 80: "oitenta", 90: "noventa"}

conversao2 = {100: "cento", 200: "duzentos", 300:"trezentos", 400:"quatrocentos", 500:"quinhentos", 600:"seiscentos", 700: "setecentos", 800: "oitocentos", 900: "novecentos" }
	
def numero_por_extenso(numero):
   
    if numero in conversao1:
        return conversao1[numero]
    elif numero == 100:
        return "cem"
    elif (numero/100)*100 != 100:                
        centena = (numero/100)*100
        dezena = (numero/10)*10
        unidade = numero%10
        return conversao2[centena] + " e " + conversao1[dezena] + " e " + conversao1[unidade]
    else:
        dezena = (numero/10)*10
        unidade = numero%10
        return "cento e " + conversao1[dezena] + " e " + conversao1[unidade]
    
