#language: es
Característica: Pagar un menú

  Reglas:

  - 1 punto por cada euro.
  - 10 puntos equivalen a un descuento de 1 euros.

  Antecedentes:
    Dados los siguientes menús:
      | numero | precio |
      | 1      | 10     |
      | 2      | 12     |
      | 3      |  8     |

    Escenario: Ganar puntos al pagar en efectivo
      Dado que he comprado 5 menús del número 1
      Cuando pido la cuenta recibo una factura de 55 euros
      Y pago en efectivo con 55 euros
      Entonces la factura está pagada
      Y he obtenido 50 puntos
