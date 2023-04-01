
package com.felipin.exercicio6;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class ConversorTemperatura extends JFrame implements ActionListener {
    private JTextField celsius;
    private JButton converter;
    private JLabel fahrenheit, kelvin;

    public ConversorTemperatura() {
        super("Conversor de Temperatura");

        // Configurações básicas da janela
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(400, 200);
        setLocationRelativeTo(null);

        // Criação dos componentes da interface gráfica
        celsius = new JTextField(5);
        converter = new JButton("Converter");
        fahrenheit = new JLabel("");
        kelvin = new JLabel("");

        // Adiciona os componentes na janela
        JPanel painel = new JPanel(new GridLayout(3, 2));
        painel.add(new JLabel("Temperatura em Celsius:"));
        painel.add(celsius);
        painel.add(new JLabel("Temperatura em Fahrenheit:"));
        painel.add(fahrenheit);
        painel.add(new JLabel("Temperatura em Kelvin:"));
        painel.add(kelvin);

        getContentPane().add(painel, BorderLayout.CENTER);
        getContentPane().add(converter, BorderLayout.SOUTH);

        // Registra o botão "converter" para ouvir eventos de clique
        converter.addActionListener(this);

        setVisible(true);
    }

    public void actionPerformed(ActionEvent evento) {
        // Lê o valor de temperatura em Celsius fornecido pelo usuário
        double temperaturaCelsius = Double.parseDouble(celsius.getText());

        // Converte a temperatura para Fahrenheit e Kelvin
        double temperaturaFahrenheit = (temperaturaCelsius * 9 / 5) + 32;
        double temperaturaKelvin = temperaturaCelsius + 273.15;

        // Exibe as temperaturas convertidas nos respectivos JLabels
        fahrenheit.setText(String.format("%.2f °F", temperaturaFahrenheit));
        kelvin.setText(String.format("%.2f K", temperaturaKelvin));
    }

    public static void main(String[] args) {
        new ConversorTemperatura();
    }
}

