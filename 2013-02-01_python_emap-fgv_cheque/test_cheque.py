import unittest

from cheque import numero_por_extenso


class TestNumeroPorExtenso(unittest.TestCase):
    def test_um(self):
        valor = numero_por_extenso("um real")
        self.assertEqual(valor, 1)

    def test_dois(self):
        valor = numero_por_extenso("dois reais")
        self.assertEqual(valor, 2)
        
    def test_dez(self):
        valor = numero_por_extenso("dez reais")
        self.assertEqual(valor, 10)
    
    def test_vinte_e_um(self):
        valor = numero_por_extenso("vinte e um reais")
        self.assertEqual(valor, 21)
        
    def test_trinta_e_tres(self):
        valor = numero_por_extenso("trinta e tres reais")
        self.assertEqual(valor, 33)
    
    def test_cem(self):
        valor = numero_por_extenso("cem reais")
        self.assertEqual(valor, 100)
    
    def test_cento_e_vinte_tres(self):
        valor = numero_por_extenso("cento e vinte e tres reais")
        self.assertEqual(valor, 123)
    
    def test_cento_e_tres(self):
        valor = numero_por_extenso("cento e tres reais")
        self.assertEqual(valor, 103)
    
    def test_trezentos_e_quarenta(self):
        valor = numero_por_extenso("trezentos e quarenta reais")
        self.assertEqual(valor, 340)
    
    def test_milhar(self):
        self.assertEqual(numero_por_extenso("mil reais"), 1000)
        self.assertEqual(numero_por_extenso("mil e um reais"), 1001)
        self.assertEqual(numero_por_extenso("dois mil e um reais"), 2001)
        self.assertEqual(numero_por_extenso("duzentos e trinta e sete mil quatrocentos e trinta e um reais"),
                         237431)
    def test_centavos(self):
        self.assertEqual(numero_por_extenso("dois mil quinhentos e vinte e tres reais e dezoito centavos"),2523.18)
   
    def test_um_real(self):
        self.assertEqual(numero_por_extenso("um real"),1)
    
    def test_um_real_um_centavo(self):
        self.assertEqual(numero_por_extenso("um real e um centavo"),1.01)
                
    def test_um_centavo(self):
        self.assertEqual(numero_por_extenso("um centavo"),0.01)
        
        
if __name__ == '__main__':
    unittest.main()
