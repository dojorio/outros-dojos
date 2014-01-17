# coding: utf-8

from math import ceil


unidades = {0: "zero", 1: "um", 2: "dois", 3: "tres", 4: "quatro", 5: "cinco",
            6: "seis", 7: "sete", 8: "oito", 9: "nove", }
familia_dez = {10: "dez", 11: "onze", 12: "doze", 13: "treze", 14: "quatorze",
               15: "quinze", 16: "dezesseis", 17: "dezessete", 18: "dezoito",
               19: "dezenove", }
dezenas = {20: "vinte", 30: "trinta", 40: "quarenta", 50: "cinquenta",
           60: "sessenta", 70: "setenta", 80: "oitenta", 90: "noventa", }

centenas = {100: "cento", 200: "duzentos", 300: "trezentos",
            400: "quatrocentos", 500: "quinhentos", 600: "seiscentos",
            700: "setecentos", 800: "oitocentos", 900: "novecentos", }


def numero_por_extenso(numero):
    if numero < 100:
        return numero_por_extenso_menor_que_cem(numero)
    elif numero == 100:
        return "cem"
    else:
        centena = int(ceil(numero / 100)) * 100
        dezena_unidade = numero - centena
        if dezena_unidade == 0:
            return centenas[centena]
        else:
            restante = numero_por_extenso_menor_que_cem(dezena_unidade)
            return centenas[centena] + " e " + restante


def numero_por_extenso_menor_que_cem(numero):
    if numero < 10:
        return unidades[numero]
    elif numero < 20:
        return familia_dez[numero]
    elif numero < 100:
        unidade = numero % 10
        dezena = numero - unidade
        if unidade == 0:
            return dezenas[numero]
        else:
            return dezenas[dezena] + " e " + unidades[unidade]
