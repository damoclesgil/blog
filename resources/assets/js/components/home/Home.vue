<template>
	<div>
		<h1 class="centralizado">{{ titulo }}</h1>
		<p v-show="mensagem" class="centralizado">{{ mensagem }}</p>
		<input type="search" class="filtro" @input="filtro = $event.target.value" placeholder="filtre por parte do título">
		<ul class="lista-fotos">
			<li class="lista-fotos-item" v-for="foto in fotosComFiltro">
				<meu-painel :titulo="foto.titulo">
					<imagem-responsiva :url="foto.url" :titulo="foto.titulo" v-meu-transform:rotate.animate="15" />

					<router-link :to="{ name: 'altera', params: { id : foto._id }}">
						<meu-botao rotulo="alterar" tipo="button" />
					</router-link>

					<meu-botao rotulo="remover" tipo="button" :confirmacao="true" @botaoAtivado="remove(foto)" estilo="perigo" />
				</meu-painel>
			</li>
		</ul>
	</div>
</template>

<script>
import Painel from "../shared/painel/Painel.vue";
import ImagemResponsiva from "../shared/imagem-responsiva/ImagemResponsiva.vue";
import Botao from "../shared/botao/Botao.vue";
import FotoService from "../../domain/foto/fotoService";

export default {
  components: {
    "meu-painel": Painel,
    "imagem-responsiva": ImagemResponsiva,
    "meu-botao": Botao
  },

  data() {
    return {
      titulo: "Fórum de Notícias",
      fotos: [],
      filtro: "",
      mensagem: ""
    };
  },
  created() {
    // criando uma instância do nosso serviço que depende de $resource
    this.service = new FotoService(this.$resource);

    this.service
      .lista()
      .then(
        fotos => (this.fotos = fotos),
        err => (this.mensagem = err.message)
      );
  },

  computed: {
    fotosComFiltro() {
      if (this.filtro) {
        let exp = new RegExp(this.filtro.trim(), "i");
        return this.fotos.filter(foto => exp.test(foto.titulo));
      } else {
        return this.fotos;
      }
    }
  },

  methods: {
    remove(foto) {
      this.service.apaga(foto._id).then(() => {
        let indice = this.fotos.indexOf(foto);
        this.fotos.splice(indice, 1);
        this.mensagem = "Foto removida com sucesso";
      }, err => (this.mensagem = err.message));
    }
  }
};
</script>

<style>
.centralizado {
  text-align: center;
}

.lista-fotos {
  list-style: none;
}

.lista-fotos .lista-fotos-item {
  display: inline-block;
}

.filtro {
  display: block;
  width: 100%;
}
</style>
