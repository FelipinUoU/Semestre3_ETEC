
package com.felipin.calculadora.etec;

public class Caixa {
    private double saldo;
    
    public Caixa(){
        this(0);       
    }
    
    public Caixa(double saldo){
        this.saldo = saldo;
    }
    
    public double getSaldo(){
        return saldo;
    }
    
    public void setSaldo(double saldo){
        this.saldo = saldo;
    }
    
    public void entrar(double valor){
        if (valor > 0){
            this.setSaldo(this.getSaldo()+ valor);
        }
    }
    
    public void retirar(double valor){
        if (valor > 0){
            this.setSaldo(this.getSaldo()- valor);
        }
    }
}
