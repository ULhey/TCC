package com.example.systemgrill;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import androidx.annotation.Nullable;

import java.text.NumberFormat;
import java.util.List;
import java.util.Locale;

public class ItensAdapter extends BaseAdapter {

    private Context ctx;
    private List<ItemPedidoLista> lista;

    public ItensAdapter(Visualizarcomanda ctx2, List<ItemPedidoLista> lista2){
        ctx = ctx2;
        lista = lista2;
    }

    @Override
    public int getCount() {
        return lista.size();
    }

    @Override
    public ItemPedidoLista getItem(int position) {
        return lista.get(position);
    }

    @Override
    public long getItemId(int i) {
        return 0;
    }

    @Override
    public View getView(int position, View view, ViewGroup viewGroup) {
        View v = null;

        if(view == null){
            LayoutInflater inflater = ((Activity)ctx).getLayoutInflater();
            v = inflater.inflate(R.layout.activity_itemlistacomanda, null);
        }else{
            v = view;
        }

        ItemPedidoLista ipe = getItem(position);
        TextView itemDescricao = (TextView) v.findViewById(R.id.itemDescricao);
        TextView itemQtd = (TextView) v.findViewById(R.id.itemQtd);
        TextView itemPreco = (TextView) v.findViewById(R.id.itemPreco);

        itemDescricao.setText(ipe.getNomeProduto());
        itemQtd.setText("Quantidade: " + Integer.toString(ipe.getQtdProduto()));

        Locale ptBr = new Locale("pt", "BR");
        String valorString = NumberFormat.getCurrencyInstance(ptBr).format(ipe.getPrecoItem());

        itemPreco.setText("Preço: " + valorString);

        return v;
    }

    @Nullable
    @Override
    public CharSequence[] getAutofillOptions() {
        return new CharSequence[0];
    }
}
