<script lang="ts">
  const monkeys = ["Capuccino", "Cara blanca", "Araña"];
</script>

<main>
  {#each monkeys as monkey}
    {monkey}
  {/each}
</main>
