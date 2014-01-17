import unittest

from numeros_por_extenso import numero_por_extenso


class TestNumerosPorExtenso(unittest.TestCase):
    def test_unidades(self):
        self.assertEqual(numero_por_extenso(0), "zero")
        self.assertEqual(numero_por_extenso(1), "um")
        self.assertEqual(numero_por_extenso(2), "dois")
        self.assertEqual(numero_por_extenso(3), "tres")
        self.assertEqual(numero_por_extenso(4), "quatro")
        self.assertEqual(numero_por_extenso(5), "cinco")
        self.assertEqual(numero_por_extenso(6), "seis")
        self.assertEqual(numero_por_extenso(7), "sete")
        self.assertEqual(numero_por_extenso(8), "oito")
        self.assertEqual(numero_por_extenso(9), "nove")
        
    def test_dezenas(self):
        self.assertEqual(numero_por_extenso(10), "dez")
        self.assertEqual(numero_por_extenso(11), "onze")
        self.assertEqual(numero_por_extenso(12), "doze")
        self.assertEqual(numero_por_extenso(13), "treze")
        self.assertEqual(numero_por_extenso(14), "quatorze")
        self.assertEqual(numero_por_extenso(15), "quinze")
        self.assertEqual(numero_por_extenso(16), "dezesseis")
        self.assertEqual(numero_por_extenso(17), "dezessete")
        self.assertEqual(numero_por_extenso(18), "dezoito")
        self.assertEqual(numero_por_extenso(19), "dezenove")
        
    def test_casa_das_dezenas(self):
        self.assertEqual(numero_por_extenso(20), "vinte")
        self.assertEqual(numero_por_extenso(21), "vinte e um")
        self.assertEqual(numero_por_extenso(30), "trinta")
        self.assertEqual(numero_por_extenso(34), "trinta e quatro")
        self.assertEqual(numero_por_extenso(40), "quarenta")
        self.assertEqual(numero_por_extenso(45), "quarenta e cinco")
        self.assertEqual(numero_por_extenso(50), "cinquenta")
        self.assertEqual(numero_por_extenso(53), "cinquenta e tres")
        self.assertEqual(numero_por_extenso(60), "sessenta")
        self.assertEqual(numero_por_extenso(62), "sessenta e dois")
        self.assertEqual(numero_por_extenso(70), "setenta")
        self.assertEqual(numero_por_extenso(71), "setenta e um")
        self.assertEqual(numero_por_extenso(80), "oitenta")
        self.assertEqual(numero_por_extenso(88), "oitenta e oito")
        self.assertEqual(numero_por_extenso(90), "noventa")
        self.assertEqual(numero_por_extenso(99), "noventa e nove")
        
    def test_centenas(self):
        self.assertEqual(numero_por_extenso(100), "cem")
        self.assertEqual(numero_por_extenso(101), "cento e um")
        self.assertEqual(numero_por_extenso(120), "cento e vinte")
        self.assertEqual(numero_por_extenso(134), "cento e trinta e quatro")
        
        self.assertEqual(numero_por_extenso(200), "duzentos")
        self.assertEqual(numero_por_extenso(300), "trezentos")
        self.assertEqual(numero_por_extenso(400), "quatrocentos")
        self.assertEqual(numero_por_extenso(500), "quinhentos")
        self.assertEqual(numero_por_extenso(600), "seiscentos")
        self.assertEqual(numero_por_extenso(700), "setecentos")
        self.assertEqual(numero_por_extenso(800), "oitocentos")
        self.assertEqual(numero_por_extenso(900), "novecentos")
