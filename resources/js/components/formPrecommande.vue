<template>
  <form
    id="precommandeForm"
    name="precommandeForm"
    class="w-full max-w-2xl"
    method="POST"
  >
    <!-- <input type="hidden" v-model="user_precommande" /> -->
    <p class="text-right text-xl font-bold mb-5">Précommander</p>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label
          class="
            block
            uppercase
            tracking-wide
            text-gray-700 text-xs
            font-bold
            mb-2
          "
          for="grid-first-name"
        >
          Secteur d'activitée
        </label>
        <select
          v-model="sector_activities"
          name="sector_activities"
          id="grid-activite"
          class="
            block
            w-full
            bg-gray-200
            text-gray-700
            border border-gray-200
            rounded-xl
            py-2
            px-4
            mb-3
            leading-tight
            focus:outline-none
            focus:ring-2 focus:ring-blue-600
            focus:border-transparent
          "
        >
          <option value="">Votre secteur d'activité</option>
          <option value="particulier">Particulier</option>
          <option value="entreprise">Entreprise</option>
        </select>
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label
          class="
            block
            uppercase
            tracking-wide
            text-gray-700 text-xs
            font-bold
            mb-2
          "
          for="grid-last-name"
        >
          Green House
        </label>
        <select
          v-model="nb_machine"
          name="nb_machine"
          id="grid-activite"
          class="
            block
            w-full
            bg-gray-200
            text-gray-700
            border border-gray-200
            rounded-xl
            py-2
            px-4
            mb-3
            leading-tight
            focus:outline-none
            focus:ring-2 focus:ring-blue-600
            focus:border-transparent
          "
        >
          <option value="">--Quantitée commander--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <label class="relative w-full flex flex-col px-3">
        <span
          class="
            block
            uppercase
            tracking-wide
            text-gray-700 text-xs
            font-bold
            mb-2
          "
          >Numéros de carte</span
        >
        <input
          id="num_card"
          v-model="card_number"
          name="card_number"
          class="
            appearance-none
            w-full
            rounded-xl
            peer
            pl-12
            py-2
            bg-gray-200
            border-gray-200
            text-gray-700
            border
            focus:outline-none
            focus:ring-2 focus:ring-blue-600
            focus:border-transparent
          "
          type="text"
          placeholder="0000 0000 0000"
        />
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="
            absolute
            bottom-0
            left-0
            -mb-0.5
            transform
            translate-x-1/2
            -translate-y-1/2
            text-black
            peer-placeholder-shown:text-gray-300
            h-6
            w-6
            ml-3
          "
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
          />
        </svg>
      </label>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6 place-items-center">
      <div class="w-full md:w-4/5">
        <label class="relative w-full flex flex-col px-3">
          <span
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            >Date d'expiration</span
          >
          <!-- <input
            v-model="date_expiration"
            name="date_expiration"
            class="
              appearance-none
              w-full
              rounded-xl
              peer
              pl-12
              py-2
              bg-gray-200
              border-gray-200
              text-gray-700
              border
              focus:outline-none
              focus:ring-2 focus:ring-blue-600
              focus:border-transparent
            "
            type="text"
            placeholder="MM/YY"
          /> -->
          <datepicker
            v-model="date_expiration"
            input-class="
              appearance-none
              w-full
              rounded-xl
              peer
              pl-12
              py-2
              bg-gray-200
              border-gray-200
              text-gray-700
              border
              focus:outline-none
              focus:ring-2 focus:ring-blue-600
              focus:border-transparent
            "
            placeholder="MM/YYYY"
            @closeCalendar="false"
          >
          </datepicker>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="
              absolute
              bottom-0
              left-3
              -mb-0.5
              transform
              translate-x-1/2
              -translate-y-1/2
              text-black
              peer-placeholder-shown:text-gray-300
              h-6
              w-6
            "
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
            />
          </svg>
        </label>
      </div>
      <div class="w-full md:w-1/5 mb-2 px-3">
        <label class="relative w-full flex flex-col h-full">
          <span
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
          >
            CVC/CVV
            <span class="relative group mb-2">
              <span
                class="
                  hidden
                  group-hover:flex
                  justify-center
                  items-center
                  py-2
                  text-xs
                  absolute
                  -right-2
                  transform
                  translate-x-full
                  -translate-y-1/2
                  bg-black
                  text-white
                "
              >
                Hey ceci est une infobulle !</span
              >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="
                  absolute
                  left-3
                  -mb-0.5
                  transform
                  translate-x-1/2
                  -translate-y-1/2
                  peer-placeholder-shown:text-gray-300
                  h-4
                  w-4
                "
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
            </span>
          </span>
          <input
            v-model="cvv"
            name="cvv"
            class="
              appearance-none
              rounded-xl
              peer
              pl-12
              py-2
              bg-gray-200
              border-gray-200
              text-gray-700
              border
              focus:outline-none
              focus:ring-2 focus:ring-blue-600
              focus:border-transparent
              -mb-1
            "
            type="text"
            placeholder="&bull;&bull;&bull;"
          />
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="
              absolute
              bottom-0
              left-0
              -mb-0.5
              transform
              translate-x-1/2
              -translate-y-1/2
              text-black
              peer-placeholder-shown:text-gray-300
              h-6
              w-6
            "
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
            />
          </svg>
        </label>
      </div>
    </div>
    <div class="flex flex-wrap mx-64">
      <button
        type="button"
        @click="submit()"
        class="
          bg-green-500
          hover:bg-green-400
          text-white
          font-bold
          py-2
          px-4
          rounded-full
        "
      >
        Précommander
      </button>
    </div>
  </form>
</template>

<script>
import axios from "axios";
import Datepicker from "vuejs-datepicker";

export default {
  name: "form-precommande",
  components: {
    Datepicker,
  },
  props: [
    "fillInputCard",
    "fillInputSector",
    "fillInputMachine",
    "fillInputDate",
    "fillInputCvv",
  ],
  data() {
    return {
      sector_activities: "",
      nb_machine: "",
      card_number: "",
      date_expiration: "",
      cvv: "",
    };
  },
  mounted() {
    console.log("Component mounted.");
    // console.log(this.fillInput);
    this.card_number = this.fillInputCard;
    this.sector_activities = this.fillInputSector;
    this.nb_machine = this.fillInputMachine;
    this.date_expiration = this.fillInputDate;
    this.cvv = this.fillInputCvv;
  },
  methods: {
    submit() {
      //   console.log(this.data());
      axios
        .post("precommande", {
          sector_activities: this.sector_activities,
          nb_machine: this.nb_machine,
          card_number: this.card_number,
          date_expiration: this.date_expiration,
          cvv: this.cvv,
        })
        .then(function (response) {
          console.log(response);
          if (response.data.status == 2) {
            window.location.href = "login";
          }
        });
    },
    check() {
      axios.get("").then(function () {
        console.log("welcome view");
        if (this.fillInput) {
          this.card_number = this.fillInput;
        }
      });
    },
  },
};
</script>