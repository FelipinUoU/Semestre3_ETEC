
package com.felipin.exercicio2;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class CalculadoraBhaskara extends JFrame implements ActionListener {
    private JTextField a, b, c;
    private JButton calcular;
    private JLabel resultado;

    public CalculadoraBhaskara() {
        super("Calculadora de Bhaskara");

        // Configurações básicas da janela
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(400, 200);
        setLocationRelativeTo(null);

        // Criação dos componentes da interface gráfica
        a = new JTextField(5);
        b = new JTextField(5);
        c = new JTextField(5);
        calcular = new JButton("Calcular");
        resultado = new JLabel("");

        // Adiciona os componentes na janela
        JPanel painel = new JPanel(new GridLayout(4, 2));
        painel.add(new JLabel("Valor de a:"));
        painel.add(a);
        painel.add(new JLabel("Valor de b:"));
        painel.add(b);
        painel.add(new JLabel("Valor de c:"));
        painel.add(c);
        painel.add(new JLabel(""));
        painel.add(calcular);

        getContentPane().add(painel, BorderLayout.CENTER);
        getContentPane().add(resultado, BorderLayout.SOUTH);

        // Registra o botão "calcular" para ouvir eventos de clique
        calcular.addActionListener(this);

        setVisible(true);
    }

    public void actionPerformed(ActionEvent evento) {
        // Lê os valores de a, b e c fornecidos pelo usuário
        double valorA = Double.parseDouble(a.getText());
        double valorB = Double.parseDouble(b.getText());
        double valorC = Double.parseDouble(c.getText());

        // Calcula o valor do delta
        double delta = (valorB * valorB) - (4 * valorA * valorC);

        // Verifica se a equação tem solução real
        if (delta < 0) {
            resultado.setText("A equação não tem solução real.");
        } else {
            // Calcula as raízes da equação
            double x1 = (-valorB + Math.sqrt(delta)) / (2 * valorA);
            double x2 = (-valorB - Math.sqrt(delta)) / (2 * valorA);

            // Exibe as raízes no JLabel
            resultado.setText("As raízes da equação são " + x1 + " e " + x2);
        }
    }

    public static void main(String[] args) {
        new CalculadoraBhaskara();
    }
}

